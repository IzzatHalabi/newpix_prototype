import mcdm
import MCDM
import Global
import json
import requests

# Get data through API Get

# Get inputs from users (id n weightage)
studList, inputs = Global.getInputArray()
roomLists, roomLimitList = Global.getAlternatives()
results = []

# Perform MCDM to each students
for inp in inputs:
    results.append(mcdm.rank(
        roomLists, 
        alt_names = Global.getAlts(), 
        is_benefit_x = Global.criteriaBenefits(), 
        n_method = "Linear1", 
        w_vector = MCDM.normalizeWeightage(inp)
    ))

# List all options into LargeList to be used for assignments
largeList = []
for i in range(len(results)): 
    for option in results[i]:
        largeList.append(option + (studList[i],))

largeList.sort(key=lambda x:x[1], reverse=True)

# Assignment Process
assignList = []
checklist = []
for s in largeList: 
    
    if s[2] in checklist: continue              # Check students are assigned in checklist
    if roomLimitList[s[0]] <= 0: continue       # Check room availability
    
    # Store
    assignList.append(s)
    checklist.append(s[2])
    roomLimitList[s[0]] -= 1
    
for s in assignList: print(s)
# for list in largeList: print(list)

listT = []
for s in assignList: listT.append(list(s))
# print(listT)

print(json.dumps(assignList))

# Send data through API Post
requests.post("http://newpix.test/api/assign", data = {
    'result':  json.dumps(assignList)
})


# # TIPS:
# result = mcdm.rank(
#     Global.alt(), 
#     alt_names = Global.altNames(), 
#     is_benefit_x = Global.cb(), 
#     n_method = "Linear1", 
#     w_vector = MCDM.normalizeWeightage(Global.w())
# )