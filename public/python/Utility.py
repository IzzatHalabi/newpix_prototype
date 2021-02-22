import mcdm
import MCDM
import Global

def getRoomPercent(preferences, rooms, students):
    list = []
    for i in range(len(preferences)): 
        list.append([
            MCDM.normalizeWeightage(preferences[i]).pop(0),         # Percentage for Desired Room
            rooms[i],                                               # Desired Room Number
            students[i]                                             # Student data [id, gender]
        ])   

    return sorted(list, reverse=True)

def desiredRoomAssignment(data, availRooms, list = [], selectedRooms = [], assignedStudents = []):
    
    for i in range(len(data)):
        if data[i][1][1] in selectedRooms: continue         # Check specific room availability
        
        
        # Store
        list.append((data[i][1][0], 1.00, data[i][2]))
        selectedRooms.append(data[i][1][1])
        assignedStudents.append(data[i][2])

    return list, selectedRooms, assignedStudents