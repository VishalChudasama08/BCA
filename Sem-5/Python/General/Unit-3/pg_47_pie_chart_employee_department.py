# Write a program to display a pie chart showing the percentage of employees in each department of a company 
import pylab

# Sample data: number of employees in each department
departments = ['HR', 'Finance', 'Engineering', 'Sales', 'Marketing']
num_employees = [10, 15, 40, 25, 20]

# Create the pie chart
pylab.pie(num_employees, labels=departments, autopct='%1.1f%%', startangle=140)

# Add a title
pylab.title('Percentage of Employees in Each Department')

# Display the pie chart
pylab.show()
