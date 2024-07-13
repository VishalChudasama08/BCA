#31 Write a python program to multiple Inheritance  
class class1(): 
    v1=0 
    def getv1(self,a): 
        self.v1=a 

class class2(): 
    v2=0 
    def getv2(self,b): 
        self.v2=b 

class class3(class1, class2): 
    def Display(self) : 
        print(" Value of First Class Variable is {}".format(self.v1)) 
        print(" Value of Second Class Variable is {}".format(self.v2))     
 
 
x = class3() 
x.getv1(10) 
x.getv2(20) 
x.Display()