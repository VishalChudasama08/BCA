#write a python program to demonstrate set collections (using its all methods)

set = {1,3,4,5,8}
print(set)

#add
set.add(2)
print("Add Value 2:", set)

#update 
set.update([6,7,8,9])
print("Update [6,7,8,9]:",set)

#discard
set.discard(4)
print("Discard 4:", set)

#remove
set.remove(6)
print("Remove 6:", set)
set.remove(2)
print("Remove 2:", set)

#discard
set.discard(2)
print("Discard 2:", set)

#pop
set.pop()
print("Pop:", set)
set.pop()
print("Pop:", set)

#copy
set1=set.copy()
print("Copy:", set1)

#clear
print("Clear:", set1.clear())

#set operation
a={1,2,3,4,5}
b={4,5,6,7,8}
c={1,2,3,4,5}
d={4,5,6,7,8}
e={6,7,8,9,10}

#union
print("Union:", a | b)

#Intersectin
print("Intersection:", a&b)

#intersection_update
c.intersection_update(d)
print("intersection_update d in c:", c)

#isdisjoinst
print("c to d isdisjoinst()", c.isdisjoint(d))
print("c to e isdisjoinst()", c.isdisjoint(e))

x={1,2,3,4,5}
y={1,2,3}
#issubset
print("x to y sub set:", x.issubset(y))
print("y to x sub set:", y.issubset(x))

#issuperset
print("x to y super set:", x.issuperset(y))
print("y to x super set:", y.issuperset(x))

#difference
print("Difference:")
print(a-b)
a.difference(b)

#difference_update
print("c", c)
print("After c set\ndifference_update:", c.difference_update(d))

#symmetric difference
print("a to b Symmetric Different:", a^b)

Z={6,8,1,3,9,10,4,7,5,2}
print("Z",Z)
print("ALL",all(Z))
print("ANY",any(Z))

Z1={}
print("ALL",all(Z1))
print("ANY",any(Z1))

print("SORTED", sorted(Z))
print("enumerate",type(enumerate(Z)))
print("LEN",len(Z))
print("MAX",max(Z))
print("MIN",min(Z))
print("SUM",sum(Z))