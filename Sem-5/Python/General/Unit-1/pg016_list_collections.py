# W.A.P.P. to demonstrate list collections (using its all methods)

list = ["Rajkot", "Jamnagar", "Morbi"]
list.append("Baroda")
print("append():", list)

list.extend(["Ahmedabad", "Surat"])
print("extend():", list)

list.insert(2, "Dwarka")
print("insert():", list)

list.remove("Morbi")
print("remove():", list)

list.pop()
print("pop():", list)

index_of_jamnagar = list.index("Jamnagar")
print("Index of 'Jamnagar':", index_of_jamnagar)

count_of_rajkot = list.count("Rajkot")
print("Count of 'Rajkot':", count_of_rajkot)

list.reverse()
print("reverse():", list)

list.sort()
print("sort():", list)

list.clear()
print("clear():", list)
