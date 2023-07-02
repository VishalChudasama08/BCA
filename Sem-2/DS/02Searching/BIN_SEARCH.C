#include<stdio.h>
#include<conio.h>
#define MAX 100
void main()
{
   int a[MAX],i,ch,re,n;
   clrscr();
   printf("Enter Array Element : ");
   scanf("%d",&n);
   for(i=0;i<n;i++)
   {
	  printf("Enter Values of Array Element: ");
	  scanf("%d",&a[i]);
   }
   printf("\nEnter Number to Find\n");
   scanf("%d",&ch);
   bin_search(a,n-1,ch);
   getch();
}
int bin_search(int a[], int size, int ch)
{
   int found=0, low=0, mid;
   int high=size;
   while(low<=high)
   {
	  mid=(low+high)/2;
	  if(ch<a[mid])
		 high=mid-1;
	  else if(ch>a[mid])
		 low=mid+1;
	  else if(ch=a[mid])
	  {
		 printf("search is successful at %d location ",mid);
		 found=1;
		 break;
	  }
   }
   if(found==0)
	  printf("search id unseccessful");
   return 0;
}