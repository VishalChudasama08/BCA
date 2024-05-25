#swap values without using variable
a = int(input("Enter 1st value: "))
b = int(input("Enter 2nd value: "))
print("Before swaping value is:- ")
print("1st value:-", a, "\n2nd value:-",b)
a = a+b
b = a-b
a = a-b
print("After swaping value is:- ")
print("1st value:-", a, "\n2nd value:-",b)