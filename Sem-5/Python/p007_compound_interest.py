#compound intrest
p = float(input("Enter Principal Amount: "))
r = float(input("Enter Rate of interrest: "))
n = float(input("Enter Year: "))

ci = p*n*(1+(p*100))
print("Compound Intrest", ci)