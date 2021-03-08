import ClassPointer as Pointer
import General
import GlobalData


# Perform Specific Room Assignment Process
def assign(acceptedRequests = [], excludeStudents = [], excludeRooms = []):

    village = Pointer.getVillageById(7)

    if not village['active']: return acceptedRequests, excludeStudents, excludeRooms

    for student in GlobalData.students:
        if student['id'] in excludeStudents: continue

        foundRooms = getAvailableRooms(student, excludeRooms)
        if not foundRooms: continue

        acceptedRequests.append([foundRooms[0], student['id'], GlobalData.MODE_REMAIN])

        excludeStudents.append(student['id'])
        excludeRooms.append(foundRooms[0])

    return acceptedRequests, excludeStudents, excludeRooms

# Get available rooms (Remain Room)
def getAvailableRooms(student, exclude = []):

    village = Pointer.getVillageById(7)
    options = Pointer.getRoomByGender(village, student['gender'])
    filtered = General.filterExclude(options, exclude)  

    return filtered
