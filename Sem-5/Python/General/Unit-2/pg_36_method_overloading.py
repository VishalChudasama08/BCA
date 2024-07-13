#36 Write a python program to method overloading

class class1: 
    a=0 
    b=0 
    c=0 
    def __init__(self,a,b,c): 
        self.a=a 
        self.b=b 
        self.c=c 
    def Getdata(self,a): 
        self.a=a 
    def Getdata(self,a,b): 
        self.a=a 
        self.b=b 
    def Getdata(self,a,b,c):  #  USE ONLY LAST METHOD CREATED BY USER 
        self.a=a 
        self.b=b 
        self.c=c 
    def Display(self): 
        print(" Value of a {}".format(self.a)) 
        print(" Value of b {}".format(self.b)) 
        print(" Value of c {}".format(self.c)) 
 
x = class1(1,2,3) 
x.Display() 
 
x.Getdata("JJKCC","MGCT","RAJKOT") 
x.Display()