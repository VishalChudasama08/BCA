# write a python program  to demonstrate dictionary collections (using its all methods)

bio = {
    "name": "Vishal",
    "rollnumber": 8,
    "number": 8320343610
}

# print dictionary values
print(bio)

# print with key value
print(bio["name"]) 

# with get 
print(bio.get('name'))

# Adding elements
bio["email"] = "vishalchudasama@gmail.com"
print(bio)

# Updating elements
bio["email"] = "vishalchudasama183@gmail.com"
print(bio) 

# Removing elements
del bio["rollnumber"]
print(bio) 

# print key value in loop 
for names, numbers in bio.items():
    print(names, ":", numbers)

# Checking for existence
if "name" in bio:
    print("name is:", bio["name"])
else:
    print("name is not listed.")

# Getting all keys
keys = bio.keys()
print(keys) 

# Getting all values
values = bio.values()
print(values)

# Getting the length
print(len(bio))

# Clearing the dictionary
bio.clear()
print(bio)
