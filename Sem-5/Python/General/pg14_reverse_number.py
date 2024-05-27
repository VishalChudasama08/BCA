# write a python program to create module for reverse number
n = int(input("Enter Number: "))
s = 0
while n>0 :
    a = n%10
    s = (s*10)+a
    n = n//10
print("Reverse Number: ", s)
