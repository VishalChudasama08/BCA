import pylab
x = [1,2,3,4]
y = [10, 11, 34, 25]

#simple bar bar grap
pylab.bar(x,y)

#bar graph with label. but lable win come only if you use "lengend()" funtion
pylab.bar(x,y, label="Experience summary")

#bar graph with label and color
pylab.bar(x,y,label="Experience summary", color="red")

pylab.xlabel("Years")
pylab.ylabel("Experience")
pylab.title("Experience Summary")
pylab.show()
