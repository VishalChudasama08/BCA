#30 Write a python program to multi-level inheritance

class College:
    def __init__(self,college_name):
        self.college_name=college_name
    def getCollegeInfo(self):
        return "College name:",self.college_name
    
class Stream(College):
    def __init__(self,college_name,stream_name):
        super().__init__(college_name)
        self.stream_name=stream_name
    def getStreamInfo(self):
        return self.getCollegeInfo(),"\nStream:",self.stream_name

class Student(Stream):
    def __init__(self,college_name,stream_name,student_name,student_id):
        super().__init__(college_name,stream_name)
        self.student_name=student_name
        self.student_id=student_id
    def getStudentInfo(self):
        string = self.getStreamInfo(),"\n Student Name:",self.student_name,"\t Student ID:",self.student_id
        return string
    
s=Student("JJKCC","BCA","Chudasama Vishal","v8143")
print(s.getStudentInfo())
