#include<stdio.h>
#include<conio.h>
void main()
{
   int i,j,k=1;
   clrscr();
   for(i=1;i<=5;i++)
   {
       for(j=1;j<=i;j++)
       {
	   printf("%3d",k++);
       }
       printf("\n");
   }
   getch();
}