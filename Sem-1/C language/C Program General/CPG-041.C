#include<stdio.h>
#include<stdio.h>
void main()
{
   int n,i=0;
   clrscr();
   printf("Enter number of Value: ");
   scanf("%d",&n);
   while(i<=10)
   {
      printf("\n %2d X %2d = %2d",n,i,n*i);
      i++;
   }
   getch();
}