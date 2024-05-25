# Iter Example: 2
list_string = [1,2,3,4,5]
i = iter(list_string)
try:
 j = next(i)
 print(j)
 j = next(i)
 print(j)
 j = next(i)
 print(j)
 j = next(i)
 print(j)
 j = next(i)
 print(j)
 j = next(i)
 print(j)
except StopIteration:
 print("NEXT VALUE NOT AVALIBLE")
