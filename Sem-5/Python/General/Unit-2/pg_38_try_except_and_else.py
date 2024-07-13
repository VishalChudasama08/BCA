#38 Write a python program to demonstrate exception handler like try ... except and else
try: 
 a = int(input("Enter number ")) 
 b = int(input("Enter Number ")) 
 c = a/b 
except SyntaxError: 
    print("Syntax Error") 
except ValueError: 
    print("Plz Input Number") 
except ZeroDivisionError: 
    print("Zero is not Division Error") 
else: 
    print (" Division is %d" %c) 