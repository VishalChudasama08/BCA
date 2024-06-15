# Write A Python program to search value using binary search method

def binary_search(item_list,item):
    first = 0
    last = len(item_list)-1
    found = False
    while( first<=last and not found):
        mid = (first + last)//2
        if item_list[mid] == item :
            found = True
        else:
            if item < item_list[mid]:
                last = mid - 1
            else:
                first = mid + 1
    return found

# number of list element
arr = [64, 34, 25, 12, 22, 11, 90]

# input search value from user
s = int(input("Enter search value:"))

if binary_search(arr,s) :
    print(s, "present in list")