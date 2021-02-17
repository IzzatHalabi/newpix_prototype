# -*- coding: utf-8 -*-
"""
Created on Fri Jan 15 08:06:50 2021

@author: lenovo
"""
import MCDM
import Validate
import Global

#########################################################################
# MAIN #

# alternatives = getAlternatives()
# input = getInputArray()
# benefits = criteriaBenefits()
# score = []
# for i in range(len(input)):
#     score.append(MCDM.SAW(alternatives, input[i], benefits))
# for s in score: print(s)

# print(Validate.s1(score[0]))

alts = Global.alt()
input = Global.w()
benefits = Global.cb()
result = MCDM.SAW(alts, input, benefits)
# result.sort()
print(result)


        