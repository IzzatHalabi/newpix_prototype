import Utility2
import ClassPointer as Pointer
import General
import MCDM_Process
import SpecificRoom_Process
import RemainRoom_Process
import GlobalData
import Jumper
from Overview import Overview


# Get data from Database  

# Adapter 
references = Utility2.referenceAdapter()
students = Utility2.studentAdapter()
benefits = Utility2.benefitAdapter()

# Save to global data 
GlobalData.references = references
GlobalData.students = students
GlobalData.benefits = benefits

excludeRooms = []                                       # filtering for assignments
excludeStudents = []                                    # filtering for assignments
acceptedRequests = []                                   # [roomId, studentId]


# Specific Room Process
#
# room assignment based on hostel only
acceptedRequests, excludeStudents, excludeRooms = SpecificRoom_Process.assign(
    acceptedRequests,
    excludeStudents,
    excludeRooms
)


# MCDM Process
#
# process requests for active Village 1 to 6 only
mcdm_results = MCDM_Process.getResults(excludeStudents)

largeList = MCDM_Process.distributeResults(mcdm_results, excludeStudents)

acceptedRequests, excludeStudents, excludeRooms = MCDM_Process.assign(
    largeList, 
    acceptedRequests,
    excludeStudents,
    excludeRooms
)


# Remaining Room Process (V6)
#
# room assignment to SIBC only (for remaining unassigned students)
acceptedRequests, excludeStudents, excludeRooms = RemainRoom_Process.assign(
    acceptedRequests,
    excludeStudents,
    excludeRooms
)


# Display results
#
#
# acceptedRequests.sort(key=lambda request:request[0])
# acceptedRequests.sort(key=lambda request:request[2])
# for request in acceptedRequests: print(request, Pointer.getStudentById(request[1])['gender'])

# print("==============")
# excludeRooms.sort()
# for i in excludeRooms: print(i)

# request[0] = RoomID
# request[1] = StudentID
# request[2] = ProcessMode


ov = Overview(acceptedRequests, excludeStudents)

ov.numAssignedStudents()
ov.numUnassignedGender()

# ov.numMethods()

ov.roomQuickInfo()

# for i in ov.selected_rooms_gender_m:
#     print(i)