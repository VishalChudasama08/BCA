n = int(input("Enter Any Number: "))
r = 'y'
if n <= 1 :
    r = 'n'
i = 2
while i < n:
    if n%i == 0 :
        r = 'n'
        break
    i += 1

if r == 'y' :
    print(n, "is Prime Number")
else :
    print(n, "is Not Prime Number")