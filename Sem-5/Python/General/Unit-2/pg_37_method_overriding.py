#37 Write a python program to method overriding
class class1(object): 
    a=0 
    b=0 
    def __init__(self,a,b): 
        self.a=a 
        self.b=b 
    def Display(self): 
        print("Value of a is {}".format(self.a)) 
        print("Value of b is {}".format(self.b)) 
         
 
class class2(class1): 
    c=0 
    def __init__(self,a,b,c): 
        super().__init__(a,b)  # main class constrator call  
        self.c=c 
    def Display(self):  
        print("Value of a is {}".format(self.a)) 
        print("Value of b is {}".format(self.b)) 
        print("Value of c is {}".format(self.c)) 
 
x = class2(10,20,30) 
x.Display()