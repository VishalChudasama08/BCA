#include<stdio.h>
#include<conio.h>
void main()
{
   int i,j,k=1;
   clrscr();
   for(i=1;i<=5;i++)
   {
       k=i;
       for(j=1;j<=5;j++)
       {
	   printf("%3d",k);
	   k+=i;
       }
       printf("\n");
   }
   getch();
}