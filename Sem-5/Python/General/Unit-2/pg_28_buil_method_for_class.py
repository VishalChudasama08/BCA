# 28 Write a python program to display in built method for classes

class student:
    count = 0
    def __init__(self,name,age):
        self.name=name
        self.age=age
        student.count+=1
    def displayCount(self):
        print("Total Student %d"%student.count)
    def displayStudent(self):
        print("Name:",self.name,"\tAge:",self.age)

print("student.__doc__:",student.__doc__)
print("student.__name__:",student.__name__)
print("student.__module__:",student.__module__)
print("student.__bases__:",student.__bases__)
print("student.__dict__:",student.__dict__)