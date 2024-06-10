# write a python program to demonstrate tuples collections (using its all methods)
tuple1 = ("Rajkot", "Morbi", "Jamnagar", "Junagadh", "Surendranagar")
tuple2 = (1, 2, 3, 4, 5)

print("tuple1:-", tuple1)
print("tuple2:-", tuple2)
print("\nSlicing a tuple:")
print("tuple1[0]:",tuple1[0])
print("tuple1[1:3]:",tuple1[1:3])
print("tuple2[1:4]:",tuple2[1:4])
print("tuple2[2:]:",tuple2[2:])
print("tuple1[-3]:",tuple1[-3])
print("tuple2*2:",tuple2*2)
print("tuple1 + tuple2:",tuple1 + tuple2)
print("tuple3 = tuple1 + tuple2")
tuple3 = tuple1 + tuple2
print("tuple3:-", tuple3)
print("tuple3*3:", tuple3*3)
print("Morbi in Tuples:", "Morbi" in tuple3)

print("\nAccessing elements of tuple:")
for item in tuple2:
    print(item)

print("\nLength of tuple:", len(tuple2))
print("Maximum:", max(tuple2))
print("Minimum:", min(tuple2))
print("Count of 3:", tuple2.count(3))
print("Index of 4:", tuple2.index(4))

print("\nConverting tuple to list:")
my_list = list(tuple2)
print("List:", my_list)


