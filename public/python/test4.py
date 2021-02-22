import Utility2
import ClassPointer as Pointer
import General
import MCDM_Process
import SpecificRoom_Process
import GlobalData

# Algorithm  
#     Set Reference (collected from Database)
#     Get preference result into list

#     For each process
#         Run special process 
#         Select rooms( based on preference ) into a list : Filter
#         Compare selected rooms with the remaining list
#         Store compared list into checklist
####################################################################

# Get data from Database  

# Adapter 
references = Utility2.referenceAdapter()
students = Utility2.studentAdapter()
benefits = Utility2.benefitAdapter()

# Save to global data 
GlobalData.references = references
GlobalData.students = students
GlobalData.benefits = benefits

excludeRooms = [15,21,22]                               # filtering for assignments
excludeStudents = []                                    # filtering for assignments
acceptedRequests = []                                   # [roomId, studentId]

# Specific Room Process
#
acceptedRequests, excludeStudents, excludeRooms = SpecificRoom_Process.assign(
    acceptedRequests,
    excludeStudents,
    excludeRooms
)

# MCDM Process
#
mcdm_results = MCDM_Process.getResults(excludeStudents)

largeList = MCDM_Process.distributeResults(mcdm_results, excludeStudents)

acceptedRequests, excludeStudents, excludeRooms = MCDM_Process.assign(
    largeList, 
    acceptedRequests,
    excludeStudents,
    excludeRooms
)

# Display results
acceptedRequests.sort()
for request in acceptedRequests: print(request, Pointer.getStudentById(request[1])['gender'])
# print("==============")
# excludeRooms.sort()
# for i in excludeRooms: print(i)
