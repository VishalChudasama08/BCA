# Write a program to display a histogram showing the number of employees in specific age groups.
import pylab

# Sample data: ages of employees
employee_ages = [22, 25, 27, 25, 23, 30, 31, 28, 25, 26, 32, 29, 27, 33, 35, 40, 41, 38, 45, 42]

# Define the age bins
bins = [20, 25, 30, 35, 40, 45, 50]

# Create the histogram
pylab.hist(employee_ages, bins, histtype='bar', rwidth=0.5, color='green')

# Add labels and title
pylab.xlabel('Age Groups')
pylab.ylabel('Number of Employees')
pylab.title('Employee Age Distribution')

pylab.legend()

# Show the plot
pylab.show()
