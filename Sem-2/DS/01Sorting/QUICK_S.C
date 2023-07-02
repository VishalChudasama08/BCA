//quick sort
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
   int arr[MAX],i,size,first=0;
   clrscr();
   printf("\nEnter Element size:- ");
   scanf("%d",&size);
   for(i=0;i<size;i++)
   {
      printf("Enter Element %d:- ",i+1);
      scanf("%d",&arr[i]);
   }
   printf("\n%d Value before Sorting\n",size);
   for(i=0;i<size;i++)
   {
      printf("\n%4d",arr[i]);
   }
   quicksort(arr, first, size-1);
   printf("\n%d Value after sorting\n",size);
   for(i=0;i<size;i++)
   {
      printf("\n%4d",arr[i]);
   }
   getch();
}
int quicksort(int x[], int first, int last)
{
   int pivot,j,i;
   pivot=x[first];
   i=first;
   j=last;
   while(first<last)
   {
      while((x[last]>=pivot)&&(i<last))
      {
	 last--;
      }
      if(first != last)
      {
	 x[first]=x[last];
	 first++;
      }
      while((x[first]<=pivot)&&(first<last))
      {
	 first++;
      }
      if(first != last)
      {
	 x[last]=x[first];
	 last--;
      }
   }
   x[first]=pivot;
   pivot= first;
   first=i;
   last=j;
   if(first<pivot)
      quicksort(x, first, pivot-1);
   if(last>pivot)
      quicksort(x, pivot+1, last);
   return 0;
}