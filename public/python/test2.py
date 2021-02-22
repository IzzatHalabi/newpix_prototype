import mcdm
import MCDM
import Global
# import json
# import requests

# Get data through API Get

# Get inputs from users (id n weightage)
studList, inputs, desiredRoomLists = Global.getInputArray()
roomLists, roomLimitList = Global.getAlternatives()

availRoomList = Global.getAvailableRoomList()

results = []

inputNW = []
assignFirst = []
for i in range(len(inputs)): 

    # Desired Room Specific Percentage
    assignFirst.append([
        MCDM.normalizeWeightage(inputs[i]).pop(0),                  # Percentage for Desired Room
        desiredRoomLists[i],                                        # Desired Room Number
        studList[i]                                                 # Student data [id, gender]
    ])        

    inputNW.append(MCDM.normalizeWeightage(inputs[i][1:6]))         # Basic formulaic MCDM

assignFirst.sort(reverse=True)

# First process Queue (Desired Room)
selectedRoom = []
assignList = []
checklist = []

# Assignment Process
for i in range(len(assignFirst)):
    
    if assignFirst[i][1][1] in selectedRoom: continue         # Check specific room availability

    # Store
    assignList.append((assignFirst[i][1][0], 1.00, assignFirst[i][2]))
    selectedRoom.append(assignFirst[i][1][1])
    checklist.append(assignFirst[i][2])
    roomLimitList[assignFirst[i][1][0]] -= 1

# Second process Queue (Preferences)
# Perform MCDM to each students
for inp in inputNW:
    results.append(mcdm.rank(
        roomLists, 
        alt_names = Global.getAlts(), 
        is_benefit_x = Global.criteriaBenefits(), 
        n_method = "Linear1", 
        w_vector = inp
    ))

# List all options into LargeList to be used for assignments
largeList = []
for i in range(len(results)): 
    for option in results[i]:
        largeList.append(option + (studList[i],))

largeList.sort(key=lambda x:x[1], reverse=True)

# Assignment Process
for s in largeList: 
    
    if s[2] in checklist: continue              # Check students are assigned in checklist
    if roomLimitList[s[0]] <= 0: continue       # Check hostel room availability
    
    # Store
    assignList.append(s)
    checklist.append(s[2])
    roomLimitList[s[0]] -= 1
    
for s in assignList: print(s)                   # Print
# print(roomLimitList)

# print(json.dumps(assignList))

# Send data through API Post
# requests.post("http://newpix.test/api/assign", data = {
#     'result':  json.dumps(assignList)
# })


# # TIPS:
# result = mcdm.rank(
#     Global.alt(), 
#     alt_names = Global.altNames(), 
#     is_benefit_x = Global.cb(), 
#     n_method = "Linear1", 
#     w_vector = MCDM.normalizeWeightage(Global.w())
# )