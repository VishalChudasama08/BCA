# Write A Python program to display values in sorting order using bubble sort method

def bobble_sort(item_list):
    for i in range(0,len(item_list)) :
        for j in range(0,len(item_list)-1) :
            if item_list[j] > item_list[j+1] :
                temp = item_list[j]
                item_list[j] = item_list[j+1]
                item_list[j+1] = temp

arr = [64, 34, 25, 12, 22, 11, 90]
print("Before Sorting Element")
print(arr)
bobble_sort(arr)
print("After Sorting Element")
print(arr)