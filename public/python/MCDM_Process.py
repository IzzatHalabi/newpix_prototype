import mcdm
import MCDM
import ClassPointer as Pointer
import General
import GlobalData

def getResults(excludeStudents = []):
    
    list = []
    for student in GlobalData.students: 

        if student['id'] in excludeStudents: continue

        list.append(mcdm.rank( 
            x_matrix = Pointer.getCriteriaValues(), 
            alt_names = Pointer.getReferenceNameList(), 
            is_benefit_x = GlobalData.benefits, 
            n_method = "Linear1", 
            w_vector = MCDM.normalizeWeightage(student['preferences'])
        ))

    return list

# List MCDM results into a bigger list for assignments
def distributeResults(results, excludeStudents = []):
    list, counter = [], 0
    for student in GlobalData.students:

        if student['id'] in excludeStudents: continue
        for result in results[counter]: list.append(result + (student['id'],))

        counter += 1

    return sorted(list, key=lambda x:x[1], reverse=True)

# Perform MCDM Assignment Process
def assign(options, acceptedRequests = [], excludeStudents = [], excludeRooms = []):

    for option in options:       
        
        village = Pointer.getVillageById(option[0])                     # option[0] = village
        student = Pointer.getStudentById(option[2])                     # option[1] = percentage
        availRooms = getAvailableRooms(village, student, excludeRooms)  # option[2] = studentId

        if option[2] in excludeStudents: continue                   # Skip when student assigned
        if not availRooms: continue                                 # Skip when no avail room

        acceptedRequests.append([availRooms[0], option[2]])         # [roomId, studentId]
        excludeStudents.append(option[2])
        excludeRooms.append(availRooms[0])

    return acceptedRequests, excludeStudents, excludeRooms

# Get available rooms (MCDM)
def getAvailableRooms(village, student, exclude = []):

    options = Pointer.getRoomByGender(village, student['gender'])
    filtered = General.filterExclude(options, exclude)   

    return filtered   