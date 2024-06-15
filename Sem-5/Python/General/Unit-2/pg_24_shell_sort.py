# Write A Python program to display values in sorting order using Shell sort

def shell_sort(item_list, n):
    length = len(item_list)
    gap = n//2
    while gap > 0:
        for i in range(gap,length):
            temp = item_list[i]
            j=i
            while j >= gap and item_list[j-gap]> temp:
                item_list[j] = item_list[j-gap]
                j = j-gap
            item_list[j]=temp
        gap=gap//2

arr = [64, 34, 25, 12, 22, 11, 90]
n = len(arr)

print("Before Sorting Element")
print(arr)
shell_sort(arr, n)
print("After Sorting Element")
print(arr)