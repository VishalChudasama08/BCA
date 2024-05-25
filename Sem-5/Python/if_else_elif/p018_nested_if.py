# nested if statement
a = int(input("Enter 1st value: "))
b = int(input("Enter 2st value: "))
c = int(input("Enter 3rd Value: "))
if a>b :
    if a>c :
        print("1st value is max")
    else :
        print("3rd value is max")
else :
    if b>c :
        print("2nd value is max")
    else :
        print("3rd value is max")
