# Mock Reference for Alternatives
def getMockReference():
    return [
        {
            'id': 1,
            'room': [1,2,3,4,5,6,7,8,9,10],
            'gender': {
                'M': [1,2,3,4,5],
                'F': [6,7,8,9,10]
            },
            'block': {
                'M': [1,2,3,4,5],
                'F': [6,7,8,9,10]
            },
            'level': {
                1: [1,2,3,4,5,6,7,8,9,10]
            },
            'shared': [
                [1,2],[3,4],[5],
                [6,7],[8,9],[10]
            ],
            'price': 42.5,
            'facility': {
                'oval': 2,
                'parking': 2,
                'sport': 3,
                'mosque': 3
            },
            'active': True
        }, 
        {
            'id': 2,
            'room': [41,42,43,44,45,46,47,48,49,50],
            'gender': {
                'M': [41,42,43,44,45],
                'F': [46,47,48,49,50]
            },
            'block': {
                'M': [41,42,43,44,45],
                'F': [46,47,48,49,50]
            },
            'level': {
                1: [41,42,43,44,45,46,47,48,49,50]
            },
            'shared': [
                [41,42],[43,44],[45],
                [46,47],[48,49],[50]
            ],
            'price': 42.5,
            'facility': {
                'oval': 3,
                'parking': 1,
                'sport': 4,
                'mosque': 4
            },
            'active': True
        }, 
        {
            'id': 3,
            'room': [51,52,53,54,55,56,57,58,59,60],
            'gender': {
                'M': [],
                'F': [51,52,53,54,55,56,57,58,59,60]
            },
            'block': {
                'M': [],
                'F': [51,52,53,54,55,56,57,58,59,60]
            },
            'level': {
                1: [51,52,53,54,55,56,57,58,59,60]
            },
            'shared': [
                [51,52],[53,54],[55,56],[57,58],[59,60]
            ],
            'price': 53.75,
            'facility': {
                'oval': 4,
                'parking': 1,
                'sport': 6,
                'mosque': 6
            },
            'active': True
        }, 
        {
            'id': 4,
            'room': [61,62,63,64,65,66,67,68,69,70],
            'gender': {
                'M': [61,62,63,64,65],
                'F': [66,67,68,69,70]
            },
            'block': {
                'M': [61,62,63,64,65],
                'F': [66,67,68,69,70]
            },
            'level': {
                1: [61,62,63,64,65,66,67,68,69,70]
            },
            'shared': [
                [61,62],[63,64],[65],
                [66,67],[68,69],[70]
            ],
            'price': 53.75,
            'facility': {
                'oval': 4,
                'parking': 1,
                'sport': 5,
                'mosque': 5
            },
            'active': True
        }, 
        {
            'id': 5,
            'room': [11,12,13,14,15,16,17,18,19,20],
            'gender': {
                'M': [11,12,13,14,15],
                'F': [16,17,18,19,20]
            },
            'block': {
                'M': [11,12,13,14,15],
                'F': [16,17,18,19,20]
            },
            'level': {
                1: [11,12,13,14,15,16,17,18,19,20],
            },
            'shared': [
                [11,12],[13,14],[15],
                [16,17],[18,19],[20]
            ],
            'price': 53.75,
            'facility': {
                'oval': 5,
                'parking': 1,
                'sport': 6,
                'mosque': 6
            },
            'active': True
        }, 
        {
            'id': 6,
            'room': [21,22,23,24,25,26,27,28,29,30],
            'gender': {
                'M': [21,22,23,24,25,26,27,28,29,30],
                'F': []
            },
            'block': {
                'M': [21,22,23,24,25,26,27,28,29,30],
                'F': []
            },
            'level': {
                1: [21,22,23,24,25,26,27,28,29,30]
            },
            'shared': [
                [21,22],[23,24],[25,26],[27,28],[29,30]
            ],
            'price': 50,
            'facility': {
                'oval': 1,
                'parking': 1,
                'sport': 2,
                'mosque': 2
            },
            'active': True
        }, 
        {
            'id': 7,
            'room': [31,32,33,34,35,36,37,38,39,40],
            'gender': {
                'M': [31,32,33,34,35,36],
                'F': [37,38,39,40]
            },
            'block': {
                'M': [31,32,33,34,35,36],
                'F': [37,38,39,40]
            },
            'level': {
                1: [31,32,33,34,35,36,37,38,39,40]
            },
            'shared': [
                [31,32],[33,34],[35,36], 
                [37,38],[39,40]
            ],
            'price': 52.5,
            'facility': {
                'oval': 1,
                'parking': 1,
                'sport': 1,
                'mosque': 1
            },
            'active': True
        }
    ]

# Mock Preference result data by Students
# [ID, Gender, Desired Village, Desired Rooms, [Preferences]]
def getMockStudent():
    return [
        ###   1 - 5   ###
        {
        'id': 25107,
        'gender': 'M',
        'race': 'Malay',
        'room': 13,
        'preferences': [5,3,3,5,4]
        },
        {
        'id': 25035,
        'gender': 'M',
        'race': 'Malay',
        'room': 13,
        'preferences': [5,5,5,5,5]
        },
        {
        'id': 25001,
        'gender': 'F',
        'race': 'Malay',
        'room': 16,
        'preferences': [5,2,5,1,2]
        },
        {
        'id': 25025,
        'gender': 'M',
        'race': 'Malay',
        'room': 12,
        'preferences': [1,1,1,1,1]
        },    
        {
        'id': 25209,
        'gender': 'F',
        'race': 'Malay',
        'room': 16,
        'preferences': [5,1,3,3,3]
        },
        
        ###   6 - 10   ###
        {
        'id': 17007013,
        'gender': 'F',
        'race': 'Malay',
        'room': 7,
        'preferences': [5,3,3,5,4]
        },
        {
        'id': 25099,
        'gender': 'M',
        'race': 'Indian',
        'room': 32,
        'preferences': [5,2,1,2,2]
        },
        {
        'id': 25515,
        'gender': 'M',
        'race': 'Chinese',
        'room': 11,
        'preferences': [3,3,3,3,3]
        },
        {
        'id': 25098,
        'gender': 'M',
        'race': 'Malay',
        'room': 11,
        'preferences': [5,1,1,1,1]
        },
        {
        'id': 25011,
        'gender': 'F',
        'race': 'Chinese',
        'room': 17,
        'preferences': [5,2,5,1,1]
        },

        ###   11 - 15   ###
        {
        'id': 25109,
        'gender': 'M',
        'race': 'Malay',
        'room': 25,
        'preferences': [5,3,3,5,4]
        },    
        {
        'id': 25222,
        'gender': 'F',
        'race': 'Malay',
        'room': 7,
        'preferences': [5,3,3,2,2]
        },
        {
        'id': 25999,
        'gender': 'M',
        'race': 'Chinese',
        'room': 23,
        'preferences': [5,4,4,2,2]
        },    
        {
        'id': 24000,
        'gender': 'M',
        'race': 'Malay',
        'room': 33,
        'preferences': [1,5,5,5,5]
        },   
        {
        'id': 25990,
        'gender': 'F',
        'race': 'Malay',
        'room': 17,
        'preferences': [2,5,5,5,2]
        }
        
    ]

# Mock Benefit result data by RV
def getMockBenefit():
    return [False, False, False, False, False]



