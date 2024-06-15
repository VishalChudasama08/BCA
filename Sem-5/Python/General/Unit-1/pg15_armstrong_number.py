# Write a python program to create module for Armstrong Number
n = int(input("Enter Number: "))
s = 0
i = n
while n!=0 :
    a = n%10
    s += a*a*a
    n = n//10
if s==i :
    print("Number is Armstrong")
else :
    print("Number is Not Armstrong")
