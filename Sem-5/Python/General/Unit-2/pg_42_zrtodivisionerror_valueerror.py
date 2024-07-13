#42 Write a python program to demonstrate exception handler like valueerror and zerodivisionerror
try: 
 a = int(input("Enter number ")) 
 b = int(input("Enter Number ")) 
 c = a/b 
except ValueError: 
    print("Plz Input Number") 
except ZeroDivisionError: 
    print("Zero Division Error") 
else: 
    print (" Division is %d" %c) 