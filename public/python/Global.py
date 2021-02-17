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

def getInput():
    return [5,3,3,5,4]

def getInputArray():
    return [
        [25107, "M"],
        [25035, "M"],
        [25025, "M"],
        [25098, "M"],
        [25109, "M"],
        [17007013, "F"]
    ], [
        [5,3,3,5,4],
        [5,5,5,5,5],
        [1,1,1,1,1],
        [5,1,1,1,1],
        [5,3,3,5,4],
        [5,2,5,1,2]
        
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
