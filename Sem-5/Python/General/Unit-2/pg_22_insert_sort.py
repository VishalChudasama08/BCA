# Write A Python program to display values in sorting order using insert sort

def insert_sort(item_list):
    for i in range(1,len(item_list)) :
        for j in range(i-1,-1,-1) :
            if item_list[j] > item_list[j+1] :
                temp=item_list[j]
                item_list[j]=item_list[j+1]
                item_list[j+1]=temp
            else:
                break

arr = [64, 34, 25, 12, 22, 11, 90]
print("Before Sorting Element")
print(arr)
insert_sort(arr)
print("After Sorting Element")
print(arr)