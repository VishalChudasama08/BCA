# WAP to create a pyramid using the input() from user.
s = input("Enter Name: ")
v = n = len(s)
while n>0 :
    i = 0
    while v>0 :
        print(s[i], end=" ")
        i += 1
        v -= 1
    print()
    v = n - 1
    n -= 1

