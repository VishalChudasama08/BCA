#include<stdio.h>
#include<stdio.h>
void main()
{
   int n,sum=0,d,i,ex;
   clrscr();
   printf("\nEnter a Number: ");
   scanf("%d",&n);
   while(n!=0)
   {
      d=n%10;
      sum+=d;
      n=n/10;
   }
   printf("\nSum of digit is %d",sum);
   getch();
}