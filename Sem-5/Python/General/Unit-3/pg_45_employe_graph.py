# Write a Python program to display employee id numbers on X-axis and their salaries on Y-axis in the form a bar graph.

import pylab

# Sample data
employee_ids = [101, 102, 103, 104, 105]
salaries = [50000, 60000, 55000, 45000, 70000]

# Simple bar graph
pylab.bar(employee_ids, salaries)

# Bar graph with label
# pylab.bar(employee_ids, salaries, label="Salaries")

# Bar graph with label and color
# pylab.bar(employee_ids, salaries, label="Salaries", color="blue")

# Adding labels and title
pylab.xlabel("Employee ID")
pylab.ylabel("Salary")
pylab.title("Employee Salaries")

pylab.show()

