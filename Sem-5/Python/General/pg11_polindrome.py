# Write a python program to accept number from user and check that number is Palindrome or not using function

n = int(input("Enter Number: "))
a = n
s = 0
while n!=0 :
    d=n%10
    s=(s*10)+d
    n=n//10
if s==a :
    print("Number is Polindrome")
else :
    print("Number is Not Polindrome")