def getMinimum(list, j):
    minimum = list[0][j]
    for i in range(len(list)):
        if minimum > list[i][j]:
            minimum = list[i][j]

    return minimum      

def getMaximum(list, j):
    maximum = list[0][j]
    for i in range(len(list)):
        if maximum < list[i][j]:
            maximum = list[i][j]

    return maximum   

def normalize(alternatives, benefit):
    list = []
    listMax = []
    normMatrix = []
    for j in range(len(benefit)):
        if benefit[j] : list.append(getMaximum(alternatives,j))
        if (benefit[j] == False) : list.append(getMinimum(alternatives,j))

    for i in range(len(alternatives)):
        tempMatrix = []
        for j in range(len(list)):
            if benefit[j] : tempMatrix.append(alternatives[i][j]/list[j])
            if (benefit[j] == False) : tempMatrix.append(list[j]/alternatives[i][j])
        normMatrix.append(tempMatrix)        

    return normMatrix

def normalizeWeightage(input):
    totalW = sum(input)
    normW = []
    for i in range(len(input)):
        normW.append(input[i]/totalW)

    return normW

def normalizeWeightageDecisionMaking(matrix, weightage):
    normWDM = []
    for i in range(len(matrix)):
        tempMatrix = []
        for j in range(len(matrix[i])):
            tempMatrix.append(matrix[i][j]*weightage[j])
        normWDM.append(tempMatrix)

    return normWDM

def getPerformance(matrix):
    performance = []
    for i in range(len(matrix)):
        performance.append(sum(matrix[i]))

    return performance

def SAW(alternatives, input, benefits):
    normMatrix = normalize(alternatives, benefits)
    normW = normalizeWeightage(input)
    normWDM = normalizeWeightageDecisionMaking(normMatrix, normW)

    return getPerformance(normWDM)
