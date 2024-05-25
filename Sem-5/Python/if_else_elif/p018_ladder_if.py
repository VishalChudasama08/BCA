# ladder if statement
per = int(input("Enter Percentage Value :"))
if per >= 90:
 grade = 'A+'
elif per >= 80:
 grade = 'A'
elif per >= 70:
 grade = 'B'
elif per >= 60:
 grade = 'C'
elif per >= 50:
 grade = 'D'
elif per >= 40:
 grade = 'E'
else:
 grade = 'F'
print(" grade is %s" %grade)
