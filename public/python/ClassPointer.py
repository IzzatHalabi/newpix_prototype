import GlobalData

def getStudentById(id):
    for student in GlobalData.students: 
        if student['id'] == id: return student

def getVillageById(id):
    for village in GlobalData.references: 
        if village['id'] == id: return village

def getRoomByGender(village, gender):
    if gender == 'M': return village['gender']['M']
    else: return village['gender']['F']

def getVillageByRoom(roomId):
    for village in GlobalData.references:
        if roomId in village['room']:
            return village
    return []

# List all reference names
def getReferenceNameList():
    list = []
    for village in GlobalData.references: 
        if not village['active']: continue
        list.append(village['id'])
    return list

# List all reference criteria values
def getCriteriaValues():
    list = []
    for village in GlobalData.references:
        if not village['active']: continue
        list.append([
            village['price'],
            village['facility']['oval'],
            village['facility']['parking'],
            village['facility']['sport'],
            village['facility']['mosque'],
        ])
    return list   

# List all studentId in students
def getStudentIds():
    list = []
    for student in GlobalData.students: list.append(student['id'])
    return list

