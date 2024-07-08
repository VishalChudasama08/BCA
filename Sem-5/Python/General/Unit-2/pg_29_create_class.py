#29 Write a python program to create student class for accept name, age. Display its values and destroy it

class Student:
    def __init__(self,a,b):
        self.name=a
        self.age=b
    def display(self):
        print("Name is",self.name,"and age is",self.age)
    def __del__(self):
        print("Object is destroyed")

s=Student("Vishal", 22)
s.display()