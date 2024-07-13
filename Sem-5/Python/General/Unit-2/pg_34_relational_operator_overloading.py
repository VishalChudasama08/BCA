#34 Write a python program to Relation Operator Overload
""" 
Operator                   Expression   Internally 
Less than                   p1 < p2       __lt__ 
Less than or equal to       p1 <= p2      __le__ 
Equal to                    p1 == p2      __eq__ 
Not equal to                p1 != p2      __ne__ 
Greater than                p1 > p2       __gt__ 
Greater than or equal to    p1 >= p2      __ge__ 
 
"""
class distance:
    def __init__(self, x=5, y=5):
        self.ft = x
        self.inch = y
    
    def __eq__(self, other):
        if self.ft == other.ft and self.inch == other.inch:
            return "both objects are equal"
        else:
            return "both objects are not equal"
    
    def __ne__(self, other):
        if self.ft != other.ft and self.inch != other.inch:
            return "both objects are not equal"
        else:
            return "both objects are equal"
    
    def __ge__(self, other):
        in1 = self.ft + self.inch
        in2 = other.ft + other.inch
        if in1 >= in2:
            return "first object greater than or equal to other"
        else:
            return "first object smaller than other"
    
    def __lt__(self, other):
        in3 = self.ft + self.inch
        in4 = other.ft + other.inch
        if in3 <= in4:
            return "first object less than or equal to other"
        else:
            return "first object smaller than other"

d1 = distance(5, 5)
d2 = distance()
print(d1 == d2)

d3 = distance()
d4 = distance(6, 10)
print(d3 != d4)

d5 = distance(3, 11)
d6 = distance()
print(d5 >= d6)

d7 = distance()
d8 = distance(6, 11)
print(d7 < d8)
