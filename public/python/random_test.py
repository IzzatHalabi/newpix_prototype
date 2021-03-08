import random

def random_students():
    # Basic init
    size = 80
    preference_size = 5


    # Init Village Ids

    init_v1_M = [x+1 for x in range(5)]
    init_v1_F = [x+1+5 for x in range(5)]

    init_v2_M = [x+1+40 for x in range(5)]
    init_v2_F = [x+1+45 for x in range(5)]

    init_v3_F = [x+1+50 for x in range(10)]

    init_v4_M = [x+1+60 for x in range(5)]
    init_v4_F = [x+1+65 for x in range(5)]

    init_v5_M = [x+1+10 for x in range(5)]
    init_v5_F = [x+1+15 for x in range(5)]

    init_v6_M = [x+1+20 for x in range(10)]

    init_sibc_M = [x+1+30 for x in range(5)]
    init_sibc_F = [x+1+35 for x in range(5)]


    # Init Student's Inputs
    init_studId = 2400
    init_gender = ['M','F']
    init_race = ['Malay','Chinese','Indian']
    init_room = [x+1 for x in range(size)]
    init_room_M = init_v1_M + init_v2_M + init_v4_M + init_v5_M + init_v6_M + init_sibc_M
    init_room_F = init_v1_F + init_v2_F + init_v3_F + init_v4_F + init_v5_F + init_sibc_F
    init_preferences = [x+1 for x in range(preference_size)]

    # Test Run Data Modification
    init_room_M = init_v2_M + init_v4_M + init_v5_M + init_sibc_M 
    init_room_F = init_v3_F + init_v4_F + init_v5_F



    # Randomization
    studIds = [ x + init_studId for x in range(size)]

    genders = []
    count_f = 0
    count_m = 0
    gender_limit_m = len(init_room_M)
    gender_limit_f = len(init_room_F)

    for i in range(size):
        selected = random.choice(init_gender)
        if selected == 'M' and count_m < gender_limit_m: 
            selected = 'M'
            count_m += 1
        elif selected == 'F' and count_f < gender_limit_f:
            selected = 'F'
            count_f += 1
        else:
            selected = 'M'
            count_m += 1
            
        genders.append(selected)

    genders = [random.choice(init_gender) for x in range(size)]          # Random gender students
    

    races = [random.choice(init_race) for x in range(size)]

    rooms = []
    for i in range(size):
        if genders[i] == 'M': rooms.append(random.choice(init_room_M))
        else: rooms.append(random.choice(init_room_F))

    preferences = [random.choice(init_preferences) for x in range(size)]

    preferences = []
    for i in range(size):
        preferences.append([random.choice(init_preferences) for x in range(5)])


    # Standardize
    students = []
    for i in range(size):
        students.append({
            'id': studIds[i],
            'gender': genders[i],
            'race': races[i],
            'room': rooms[i],
            'preferences': preferences[i],
        })


    # Display
    # for i in students: print(i)

    # for i in range(size): print(i, studIds[i], genders[i], rooms[i], preferences[i])

    return students