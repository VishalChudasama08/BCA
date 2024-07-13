#39 Write a python program to demonstrate exception handler like assert
def count(n):
    assert len(n) > 0, "Please insert a name value"
    print("Your Name is", n)

name = input("Enter Your Name: ")

try:
    count(name)
except AssertionError as e:
    print(e)
