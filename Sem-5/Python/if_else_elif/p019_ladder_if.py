#ladder if statement (RANGE)
per = int(input("Enter Percentage Value: "))
if per >= 0 and per<40:
 grade= 'F'
elif per >= 40 and per<50:
 grade= 'E'
elif per >= 50 and per<60:
 grade= 'D'
elif per >= 60 and per<70:
 grade= 'C'
elif per >= 70 and per<80:
 grade= 'B'
elif per >= 80 and per<90:
 grade= 'A'
else:
 grade= 'A+'
print(" grade is %s" %grade)
