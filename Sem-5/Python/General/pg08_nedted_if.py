# Write a python program to accept percentage value from user and display grade (ladder if)
per = int(input("Enter Your 12th Percentage: "))
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

print("Your Grade is:", grade)