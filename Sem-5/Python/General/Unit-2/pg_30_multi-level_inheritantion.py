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
        return self.getStreamInfo(),"\nStudent Name:",self.stream_name,"\tStudent ID:",self.student_id
    
s=Student("JJKCC","BCA","Chudasama Vishal","v8143")
print(s.getStudentInfo())
