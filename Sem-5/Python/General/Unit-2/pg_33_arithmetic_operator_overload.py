#33 Write a python program to  Arithmetic Operator Overload
""" 
Operator                      Expression           Internally 
Addition                        p1 + p2            __add__ 
Subtraction                     p1 - p2            __sub__ 
Multiplication                  p1 * p2            __mul__ 
Power                           p1 ** p2        __pow__ 
Division                        p1 / p2            __truediv__ 
Floor Division                  p1 // p2        __floordiv__ 
Remainder (modulo)              p1 % p2            __mod__ 
Bitwise Left Shift              p1 << p2        __lshift__ 
Bitwise Right Shift             p1 >> p2        __rshift__ 
Bitwise AND                     p1 & p2            __and__ 
Bitwise OR                      p1 | p2            __or__ 
Bitwise XOR                     p1 ^ p2            __xor__ 
Bitwise NOT                     ~p1                __invert__ 
 
""" 
 
""" Program to overload Arithmetic Operator """ 
class Example: 
  def __init__ (self, a , b): 
      self.a = a 
      self.b = b 
  def __add__(self,other): 
      a = self.a + other.a 
      b = self.b + other.b 
      return Example(a,b) 
      #return Example(self.a + other.a, self.b + other.b) 
  def __sub__(self,other): 
      return Example(self.a - other.a, self.b - other.b) 
  def __mul__(self,other): 
      return Example(self.a * other.a, self.b * other.b) 
  def __str__(self): 
      return "({0},{1})".format(self.a,self.b) 
  def  __pow__(self,other): 
      return Example(self.a ** other.a, self.b ** other.b) 
 
v1 = Example(6,8) 
v2 = Example(3,4) 
v3 = Example(1.2,2.2) 
 
print("VALUE OF FIRST OBJECT: -",v1) 
print("VALUE OF SECOND OBJECT: -",v2) 
print("VALUE OF THIRD OBJECT: -",v3) 
print ("ADDTION 1st and 2nd Object: -", v1 + v2) 
print ("SUBTRACTION 1st and 3rd Obejct: -" ,v1 - v3) 
print ("MULTIPLIATION 1st and 2nd Object :-",v1 * v2) 
print("POWER OF 1st and 2nd  Object ",v1**v2)