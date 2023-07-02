//sequencial search
#include<stdio.h>
#include<conio.h>
#define MAX 50
void main()
{
   int i,j,n,ch,f=0;
   int a[MAX];
   clrscr();
   printf("Enter Number of Element of Array");
   scanf("%d",&n);
   for(i=0;i<n;i++)
   {
	  printf("Enter Value of Array Element");
	  scanf("%d",&a[i]);
   }
   printf("\nEnter Index Number Which You Find\n");
   scanf("%d",&ch);
   for(i=0;i<n;i++)
   {
	  if(a[i]==ch)
	  {
		 printf("\n Value Founded at Position [%d]\n value is %d",i,a[i]);
		 f=1;
	  }
   }
   if(f==0)
	  printf("\nValue Not Found");
   getch();
}