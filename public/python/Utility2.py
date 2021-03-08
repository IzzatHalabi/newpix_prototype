import Global2
import random_test

# Change JSON format for reference
def referenceAdapter(result = []):
    return Global2.getMockReference()       # Mock Data

# Change JSON format for data
def studentAdapter(result = []):
    return random_test.random_students()         # Mock Data

# Change JSON format for benefit
def benefitAdapter(result = []):
    return Global2.getMockBenefit()         # Mock Data