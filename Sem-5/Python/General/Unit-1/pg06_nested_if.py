# Write a python program to accept three values from user and display MAXIMUM value (NESTED IF)

a = float(input("Enter Value 1: "))
b = float(input("Enter Value 2: "))
c = float(input("Enter Value 3: "))
if a>b : 
    if a>c : 
        print("Maximum value is",a)
    else : 
        print("Maximum value is",c)
else:
    if b>c :
        print("Maximum value is",b)
    else :
        print("Maximum value is",c)