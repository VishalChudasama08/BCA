#Write a program to input to input 4 subject marks from the user and prepare mark sheet with following rules
# 1. Internal mark must be enter between 0 to 30 and min mark is 12 for pass
# 2. Theory mark must be enter between 0 to 70 and min mark is 28 for pass
# Display marks, result and grade
print("Enter Internal Mark in 0 to 30 ")
s1i = int(input("Enter Subject 1 Internal Mark : "))
s2i = int(input("Enter Subject 2 Internal Mark : "))
s3i = int(input("Enter Subject 3 Internal Mark : "))
s4i = int(input("Enter Subject 4 Internal Mark : "))

print("Enter Theory Mark in 0 to 70 ")
s1t = int(input("Enter Subject 1 Theory Mark : "))
s2t = int(input("Enter Subject 2 Theory Mark : "))
s3t = int(input("Enter Subject 3 Theory Mark : "))
s4t = int(input("Enter Subject 4 Theory Mark : "))

if s1i>30 or s2i>30 or s3i>30 or s4i>30 or s1t>70 or s2t>70 or s3t>70 or s4t>70 :
    print("Please Enter Valid Marks")
    exit()
    

s1 = s1t + s1i
s2 = s2t + s2i
s3 = s3t + s3i
s4 = s4t + s4i

total = s1 + s2 + s3 +s3
per = total / 4

if per>=90 :
    grade = 'A+'
elif per>=80 :
    grade = 'A'
elif per>=70 :
    grade = 'B'
elif per>=60 :
    grade = 'C'
elif per>=50 :
    grade = 'D'
elif per>=33 :
    grade = 'E'
else :
    grade = 'F'

print("Subject 1 Mark total mark : %d" %s1)
print("Subject 2 Mark total mark : %d" %s2)
print("Subject 3 Mark total mark : %d" %s3)
print("Subject 4 Mark total mark : %d" %s4)

print("Percentage : %d" %per)

print("Grade : %s" %grade)