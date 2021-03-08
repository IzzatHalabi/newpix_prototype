import GlobalData
import ClassPointer as Pointer
import General
from termcolor import colored

class Overview:

    references = []
    original = []
    excludeStudents = []

    all_Id = []
    unassigned = []
    acceptedRequests = []

    count_unassigned_m = 0
    count_unassigned_f = 0

    count_mode_specific = 0
    count_mode_hostel = 0
    count_mode_mcdm = 0
    count_mode_remain = 0

    selected_rooms = []
    un_selected_rooms = []

    selected_rooms_gender_m = []
    selected_rooms_gender_f = []

    selected_SPECIFIC = []
    selected_HOSTEL = []
    selected_MCDM = []
    selected_REMAIN = []

    selected_race_malay = []
    selected_race_chinese = []
    selected_race_indian = []


    def __init__(self, acceptedRequests, excludeStudents):
        self.original = GlobalData.students
        self.references = GlobalData.references
        self.excludeStudents = excludeStudents
        self.acceptedRequests = acceptedRequests

        self.processStudents()
        self.processUnassignedGender()
        self.processMode()
        self.processHostel()
        self.processAssignedGenderTabular()
        self.processMethodTabular()
        self.processAssignedRaceTabular()

    # Process
    def processStudents(self):
        self.all_Id = Pointer.getStudentIds()
        self.unassigned = General.filterExclude(self.all_Id, self.excludeStudents)

    def processUnassignedGender(self):
        for i in self.unassigned:
            student = Pointer.getStudentById(i)
            if student['gender'] == 'M': self.count_unassigned_m += 1
            else: self.count_unassigned_f += 1

    def processMode(self):
        for request in self.acceptedRequests:
            if request[2] == GlobalData.MODE_SPECIFIC: self.count_mode_specific += 1
            elif request[2] == GlobalData.MODE_HOSTEL: self.count_mode_hostel += 1
            elif request[2] == GlobalData.MODE_MCDM: self.count_mode_mcdm += 1
            else: self.count_mode_remain += 1

    def processHostel(self):
        selectedRooms = [room[0] for room in self.acceptedRequests]
        for village in self.references:

            selected = []
            unselected = []
            for room in village['room']:
                if room in selectedRooms:
                    selected.append(room)
                else: 
                    unselected.append(room)
            
            self.selected_rooms.append(selected)
            self.un_selected_rooms.append(unselected)

    def processMethodTabular(self):
        selectedRooms = [room[0] for room in self.acceptedRequests]
        for village in self.references:

            specific = 0
            hostel = 0
            mcdm = 0
            remain = 0

            for room in village['room']:
                if room in selectedRooms:
                    for request in self.acceptedRequests:
                        if request[0] != room: continue
                        
                        if request[2] == GlobalData.MODE_SPECIFIC: specific += 1
                        elif request[2] == GlobalData.MODE_HOSTEL: hostel += 1
                        elif request[2] == GlobalData.MODE_MCDM: mcdm += 1
                        else: remain += 1

            self.selected_SPECIFIC.append(specific)
            self.selected_HOSTEL.append(hostel)
            self.selected_MCDM.append(mcdm)
            self.selected_REMAIN.append(remain)
        

    def processAssignedGenderTabular(self):
        selectedRooms = [room[0] for room in self.acceptedRequests]
        for village in self.references:

            selected_gender_m = []
            selected_gender_f = []

            for room in village['gender']['M']:
                if room in selectedRooms:
                    for request in self.acceptedRequests:
                        if request[0] == room:
                            student = Pointer.getStudentById(request[1])
                            selected_gender_m.append(student)

            for room in village['gender']['F']:
                if room in selectedRooms:
                    for request in self.acceptedRequests:
                        if request[0] == room:
                            student = Pointer.getStudentById(request[1])
                            selected_gender_f.append(student)

            self.selected_rooms_gender_m.append(selected_gender_m)
            self.selected_rooms_gender_f.append(selected_gender_f)
        
    def processAssignedRaceTabular(self):
        selectedRooms = [room[0] for room in self.acceptedRequests]
        for village in self.references:

            selected_malay = []
            selected_chinese = []
            selected_indian = []

            for room in village['room']:
                if room in selectedRooms:
                    for request in self.acceptedRequests:
                        if request[0] != room: continue
                        student = Pointer.getStudentById(request[1])
                        
                        if student['race'] == 'Malay':
                            selected_malay.append(student)
                        elif student['race'] == 'Chinese':
                            selected_chinese.append(student)
                        else: 
                            selected_indian.append(student)

            self.selected_race_malay.append(selected_malay)
            self.selected_race_chinese.append(selected_chinese)
            self.selected_race_indian.append(selected_indian)

    # Display
    def numbersOfAssignedStudents(self):
        print("Unassigned: ", self.unassigned)

    def numAssignedStudents(self):
        print("\nAssigned: ", len(self.excludeStudents), "/", len(self.all_Id))

    def numUnassignedStudents(self):
        print("Unassigned: ", len(self.unassigned))

    def numUnassignedGender(self):
        print("\n===== GENDER =====")
        print("Unassigned male: ", self.count_unassigned_m)
        print("Unassigned female: ", self.count_unassigned_f)

    def numMethods(self):
        print("\n===== METHODS =====")
        print("SPECIFIC: ", self.count_mode_specific)
        print("HOSTEL: ", self.count_mode_hostel)
        print("MCDM: ", self.count_mode_mcdm)
        print("REMAIN: ", self.count_mode_remain)

    def roomQuickInfo(self):
        print("\n===== ROOMS QUICK INFO =====")
        print ("{:<8} | {:<8} {:<8} | {:<8} {:<8} {:<8} | {:<8} {:<8} {:<8} {:<8} | {:<10} {:<10}".format(
            'Village', 'Male', 'Female', 'Malay', 'Chinese', 'Indian', 'SPECIFIC', 'HOSTEL', 'MCDM', 'REMAIN', 'Select', 'Unselect'
            ))

        for i in range(len(self.references)):
            print ("{:<8} | {:<8} {:<8} | {:<8} {:<8} {:<8} | {:<8} {:<8} {:<8} {:<8} | {:<10} {:<10}".format(
                self.references[i]['id'], 
                len(self.selected_rooms_gender_m[i]),
                len(self.selected_rooms_gender_f[i]),
                len(self.selected_race_malay[i]),
                len(self.selected_race_chinese[i]),
                len(self.selected_race_indian[i]),
                self.selected_SPECIFIC[i],
                self.selected_HOSTEL[i],
                self.selected_MCDM[i],
                self.selected_REMAIN[i],
                len(self.selected_rooms[i]),
                len(self.un_selected_rooms[i])
            ))

        print ("\n{:<8} | {:<8} {:<8} | {:<8} {:<8} {:<8} | {:<8} {:<8} {:<8} {:<8} | {:<10} {:<10}".format(
            'Total', 
            sum([len(village) for village in self.selected_rooms_gender_m]),
            sum([len(village) for village in self.selected_rooms_gender_f]),
            sum([len(village) for village in self.selected_race_malay]),
            sum([len(village) for village in self.selected_race_chinese]),
            sum([len(village) for village in self.selected_race_indian]),
            sum([village for village in self.selected_SPECIFIC]),
            sum([village for village in self.selected_HOSTEL]),
            sum([village for village in self.selected_MCDM]),
            sum([village for village in self.selected_REMAIN]),
            sum([len(village) for village in self.selected_rooms]),
            sum([len(village) for village in self.un_selected_rooms])
        ))

    
            
    

