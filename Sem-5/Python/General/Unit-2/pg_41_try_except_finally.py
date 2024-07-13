#41 Write a python program to demonstrate exception handler like try ... except  and finally
try: 
    num1 = int(input("Enter First numbers : ")) 
    num2 = int(input("Enter Two numbers : ")) 
    result = num1 / num2 
    print("Result is", result) 
except ZeroDivisionError: 
     print("Division by zero is error !!") 
except SyntaxError: 
     print("Comma is missing. Enter numbers separated by comma like this 1, 2") 
except: 
     print("Wrong input") 
else: 
     print("No exceptions") 
finally: 
     print("This will execute no matter what")