# Write a program to create a line graph to show the profits of a company in various years. 
import pylab

# Sample data: profits in various years
years = [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023]
profits = [20000, 25000, 30000, 28000, 32000, 35000, 37000, 39000, 42000]

# Create the line graph
pylab.plot(years, profits, marker='o', linestyle='-', color='b')

# Add labels and title
pylab.xlabel('Years')
pylab.ylabel('Profits (in USD)')
pylab.title('Company Profits Over the Years')

# Display the line graph
pylab.show()
