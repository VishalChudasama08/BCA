#40 Write a python program to demonstrate exception handler like raise

x = int(input("Enter Number: "))
try:
    if x != 10:
        raise Exception("X Value is Not Equal to 10")
except Exception as e:
    print(e)
