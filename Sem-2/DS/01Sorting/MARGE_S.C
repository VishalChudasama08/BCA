//marge sort
#include<stdio.h>
#include<conio.h>
void m_sort(int, int);
void marge_sort(int, int, int);
int arr[50],n,p=0;
void main()
{
   int i;
   clrscr();
   printf("\nEnter the size of Array:- ");
   scanf("%d",&n);
   for(i=0;i<n;i++)
   {
      printf("Enter the Array value:- ");
      scanf("%d",&arr[i]);
   }
   m_sort(0, n-1);
   printf("\n sorted Array\n");
   for(i=0;i<n;i++)
   {
      printf("%4d\n",arr[i]);
   }
   getch();
}
void m_sort(int low, int high)
{
   int mid;
   if(low != high)
   {
      mid = (low + high) / 2;
      m_sort(low, mid);
      m_sort(mid+1, high);
      marge_sort(low, mid, high);
   }
}
void marge_sort(int low, int mid, int high)
{
   int i,j,k,temp[50];
   i=low;
   j=mid+1;
   k=low;
   do
   {
      if(arr[i]>=arr[j])
	 temp[k++]=arr[j++];
      else
	 temp[k++]=arr[i++];
   }while((i<=mid)&&(j<=high));
   while(i<=mid)
      temp[k++]=arr[i++];
   while(j<=high)
      temp[k++]=arr[j++];
   for(i=low;i<=high;i++)
      arr[i]=temp[i];
}
