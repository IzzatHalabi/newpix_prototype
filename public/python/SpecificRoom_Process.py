import ClassPointer as Pointer
import General
import GlobalData

# Perform Specific Room Assignment Process
def assign(acceptedRequests = [], excludeStudents = [], excludeRooms = []):

    mode = GlobalData.MODE_SPECIFIC

    for student in GlobalData.students:
        if student['id'] in excludeStudents: continue
        if student['room'] in excludeRooms: 
            foundRooms = getAvailableRooms(student, excludeRooms)
            if foundRooms: 
                student['room'] = foundRooms[0] 
                mode = GlobalData.MODE_HOSTEL
            else: continue
            
        if not Pointer.getVillageByRoom(student['room'])['active']: continue

        acceptedRequests.append([student['room'], student['id'], mode])

        excludeStudents.append(student['id'])
        excludeRooms.append(student['room'])

        mode = GlobalData.MODE_SPECIFIC

    return acceptedRequests, excludeStudents, excludeRooms

# Get available rooms (Specific Room)
def getAvailableRooms(student, exclude = []):

    village = Pointer.getVillageByRoom(student['room'])
    options = Pointer.getRoomByGender(village, student['gender'])
    filtered = General.filterExclude(options, exclude)   

    return filtered   
