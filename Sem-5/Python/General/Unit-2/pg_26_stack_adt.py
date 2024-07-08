# 26 Write a python program to Stack ADT

class stack:
    def __init__(self):
        self.stack = []
    def isEmpty(self):
        return self.stack==[]
    def push(self, val):
        self.stack.append(val)
    def peep(self):
        if self.isEmpty():
            return None
        else:
            return self.stack[len(self.stack)-1]
    def pop(self):
        if len(self.stack)<=0:
            return ("no element in the stack")
        else:
            return self.stack.pop()
    def size(self):
        return self.stack
    def display(self):
        for i in self.stack:
            print(i, end="\t")

s=stack()
print("Empty", s.isEmpty())
s.push(1)
s.push(2)
s.push(3)
s.push(4)
print("size", s.size())
s.display()
print(' ')
print("pop", s.pop())
print("pop", s.pop())
print("pop", s.pop())
print("pop", s.pop())
print("pop", s.pop())