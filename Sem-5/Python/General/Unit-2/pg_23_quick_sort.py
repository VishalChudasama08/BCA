# Write A Python program to display values in sorting order using Quick sort

def quick_sort(ar, first,last):
    low=first
    high=last
    pivot=ar[(low+high)//2]
    while(low<=high) :
        while(ar[low] < pivot) :
            low = low+1
        while(ar[high]> pivot) :
            high = high-1
        if(low <= high):
            temp=ar[low]
            ar[low]=ar[high]
            ar[high] = temp
            low=low+1
            high=high-1
    if (first < high) :
        quick_sort(ar,first,high)
    if (low< last) :
        quick_sort(ar,low,last)

arr = [64, 34, 25, 12, 22, 11, 90]
n = len(arr)

print("Before Sorting Element")
print(arr)
quick_sort(arr, 0, n-1)
print("After Sorting Element")
print(arr)