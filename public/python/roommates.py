import Utility2
import GlobalData

# Adapter 
references = Utility2.referenceAdapter()
students = Utility2.studentAdapter()
benefits = Utility2.benefitAdapter()

# Save to global data 
GlobalData.references = references
GlobalData.students = students
GlobalData.benefits = benefits


# Racial Grouping
#
#


list = []
for student in students: list.append([student['id'], student['gender'], student['race'], student['room']])

list.sort(key=lambda request:request[1])
list.sort(key=lambda request:request[0])
# list.sort(key=lambda request:request[3])
list.sort(key=lambda request:request[2])

for student in list: print(student)