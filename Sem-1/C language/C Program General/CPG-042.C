#include<stdio.h>
#include<conio.h>
void main()
{
   int n,sum=0,d;
   clrscr();
   printf("Enter No of Step: ");
   scanf("%d",&n);
   while(n!=0)
   {
      d=n%10;
      sum=(sum*10)+d;
      n=n/10;
   }
   printf("\nReverse no=%d",sum);
   getch();
}