#######################################################
# mock values for UTP accom
def getAlts():
    # return [1,2,3,4,5,6]
    return [1,5,6]

def getAlternatives():
    names = getAlts()
    return [
        [42.5,2,2,3,3],
        # [42.5,3,1,4,4],
        # [53.75,4,1,6,6],
        # [53.75,4,1,5,5],
        [53.75,5,1,6,6],
        [50,1,1,2,2]
    ], {
        names[0]: 3,
        # names[1]: 3,
        # names[2]: 3,
        # names[3]: 3,
        names[1]: 3,
        names[2]: 4
    }

def getAvailableRoomList():
    return {
        1:{
            'M':[1, 2, 3, 4, 5],
            'F':[6, 7, 8, 9, 10]
        },
        5:{
            'M':[11, 12, 13, 14, 15],
            'F':[16, 17, 18, 19, 20]
        },
        6:{
            'M':[21, 22, 23, 24, 25]
        }

        # 7:{
        #     'M':[26, 27, 28, 29, 30],
        #     'F':[31, 32, 33, 34, 35]
        # }
    }

def getInput():
    return [5,3,3,5,4]

def getInputArray():
    return [
        # Students
        # [StudentID, Gender]
        [25107, "M"],
        [25035, "M"],
        [25025, "M"],
        [25098, "M"],
        [25109, "M"],
        [17007013, "F"],

        [25099, "M"],
        [25515, "M"],
        [25001, "F"],
        [25011, "F"],
        [25209, "F"],
        [25222, "F"]
    ], [
        # Preferences
        # [Room, Price, {Distances}]
        [8, 5,3,3,5,4],
        [10, 5,5,5,5,5],
        [10, 1,1,1,1,1],
        [7, 5,1,1,1,1],
        [2, 5,3,3,5,4],
        [10, 5,2,5,1,2],

        [10, 5,2,1,2,2],
        [5, 3,3,3,3,3],
        [9, 5,2,5,1,2],
        [10, 5,2,5,1,2],
        [10, 5,2,5,1,2],
        [7, 5,2,5,1,2],
    ], [
        # Desired room
        # [Village, Room]
        [5, 12],
        [1, 3],
        [5, 12],
        [5, 12],
        [6, 25],
        [1, 7],

        [6, 25],
        [5, 11],
        [5, 16],
        [5, 17],
        [5, 18],
        [1, 7],
    ]
        

def criteriaBenefits():
    return [False, False, False, False, False]

#######################################################
# test
def altNames():
    return [1,2,3,4,5]

def alt():
    return [
        [9, 12000, 72, 3],
        [7.6, 8500, 68, 3],
        [8.2, 9500, 63, 2],
        [8.5, 10000, 70, 4],
        [9.3, 14000, 72, 4]
    ]

def cb():
    return [True, False, True, True]

def w():
    return [0.3,0.2,0.25,0.25]
#######################################################