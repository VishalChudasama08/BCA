# write a python program to accept a number and cout factorial using recursive method
n = int(input("Enter a Number: "))
def factorial(n):
    if n==1 :
        f = 1
    else :
        f = n*factorial(n-1)
    return f
fact = factorial(n)
print("Factorial is: ", fact) 
