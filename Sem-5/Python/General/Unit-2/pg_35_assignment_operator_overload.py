#35 Write a python program to Assignment Operator Overload
""" 
Operators   Expression      Internally 
    -=      p2 -= p1        __isub__ 
    +=      p2 += p1        __iadd__ 
    *=      p2 *= p1        __imul__ 
    /=      p2 /= p1        __idiv__ 
    //=     p2 //= p1       __ifloordiv__ 
    %=      p2 %= p1        __imod__ 
    **=     p2 **= p1       __ipow__ 
    >>=     p2 >>= p1       __irshift__ 
    <<=     p2 <<= p1       __ilshift__ 
    &=      p2 &= p1        __iand__ 
    !=      p2 != p1        __ior__ 
    ^=      p2 ^= p1        __ixor__ 
"""
class Example:
    def __init__(self, a, b):
        self.a = a
        self.b = b

    def __str__(self):
        return "({0},{1})".format(self.a, self.b)

    def __iadd__(self, other):
        self.a += other.a
        self.b += other.b
        return self

    def __isub__(self, other):
        self.a -= other.a
        self.b -= other.b
        return self

v1 = Example(1, 2)
v2 = Example(2, 3)
v2 += v1
print("Assignment with Plus Operator:", v2)

v3 = Example(10, 20)
v4 = Example(2, 3)
v3 -= v4
print("Assignment with Minus Operator:", v3)
