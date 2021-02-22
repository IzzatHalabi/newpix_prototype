import mcdm
import MCDM
import Global
import Utility

studList, preferenceList, desiredRoomList = Global.getInputArray()

hostelList, nan = Global.getAlternatives()

availRoomList = Global.getAvailableRoomList()

# for i in availRoomList: print(availRoomList[i]['M'][0])

# First process Queue (Desired Room)
# Desired Room Specific Percentage
assignList = Utility.getRoomPercent(preferenceList, desiredRoomList, studList)
for i in assignList: print(i)
print("=== assign list")
assignList, selectedRoom, checklist = Utility.desiredRoomAssignment(assignList, availRoomList)



# for i in assignList: print(i)
# print("=== assign list after")
# for i in selectedRoom: print(i)
# print("=== selectedRoom")
# for i in checklist: print(i)
# print("=== checklist")

