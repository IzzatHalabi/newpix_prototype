# -*- coding: utf-8 -*-
"""
Created on Fri Jan 15 08:06:50 2021

@author: lenovo
"""
import MCDM
import Validate

def getAlternatives():
    V1 = [42.5,2,2,3,3]
    V2 = [42.5,3,1,4,4]
    V3 = [53.75,4,1,6,6]
    V4 = [53.75,4,1,5,5]
    V5 = [53.75,5,1,6,6]
    V6 = [50,1,1,2,2]

    return [V1,V2,V3,V4,V5,V6]
    # return [V2,V3,V4,V5]

def getInput():
    return [5,3,3,5,4]

def getInputArray():
    s1 = [5,3,3,5,4]
    s2 = [5,5,5,5,5]
    s3 = [1,1,1,1,1]
    s4 = [5,1,1,1,1]
    s5 = [5,3,3,5,4]

    return [
        s1,
        # s2,
        # s3,
        # s4,
        # s5
        ]

def criteriaBenefits():
    return [False, False, False, False, False]


# test
def alt():
    s1 = [9, 12000, 72, 3]
    s2 = [7.6, 8500, 68, 3]
    s3 = [8.2, 9500, 63, 2]
    s4 = [8.5, 10000, 70, 4]
    s5 = [9.3, 14000, 72, 4]
    return [s1,s2,s3,s4,s5]

def cb():
    return [True, False, True, True]



#########################################################################
# MAIN #

# alternatives = getAlternatives()
# input = getInputArray()
# benefits = criteriaBenefits()

# score = []
# for i in range(len(input)):
#     score.append(MCDM.SAW(alternatives, input[i], benefits))

# score[0].sort()

# print(score[0])

# print(Validate.s1(score[0]))
# print(score[0])

alts = alt()
input = [0.3,0.2,0.25,0.25]
benefits = cb()

result = MCDM.SAW(alts, input, benefits)
# result.sort()

print(result)


        