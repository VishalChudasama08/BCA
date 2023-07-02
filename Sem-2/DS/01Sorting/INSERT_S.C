//insertion sorting
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
   int arr[MAX],i,size;
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
   insertion(arr, size);
   printf("\n%d Value after sorting\n",size);
   for(i=0;i<size;i++)
   {
      printf("\n%4d",arr[i]);
   }
   getch();
}
int insertion(int arr[],int size)
{
   int i,j,tmp;
   for(i=0;i<size;i++)
   {
      for(j=i-1;j>=0;j--)
      {
	 if(arr[j]>arr[j+1])
	 {
	    tmp=arr[j];
	    arr[j]=arr[j+1];
	    arr[j+1]=tmp;
	 }
	 else
	    break;
      }
   }
   return 0;
}