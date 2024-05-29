# Write a python program to accept a number from user and check that number positive , negative and zero( NESTED IF)
a = float(input("Enter Any Number: "))
if a!=0 :
    if a>0 :
        print("Number is Positive")
    else :
        print("Number is Nagative")
else :
    print("Number is Zero")