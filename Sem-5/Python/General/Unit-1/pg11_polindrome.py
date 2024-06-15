# Write a python program to accept number from user and check that number is Palindrome or not using function

n = int(input("Enter Number: "))
def polindrome(v) :
    a = v
    s = 0
    while v!=0 :
        d=v%10
        s=(s*10)+d
        v=v//10
    return s

s = polindrome(n)
if s==n :
    print("Number is Polindrome")
else :
    print("Number is Not Polindrome")