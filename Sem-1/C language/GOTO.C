#include<stdio.h>
#include<conio.h>
void main()
{
   int a=1;
   clrscr();
   vishal:
   if(a==5)
   {
      a++;
      goto vishal;
   }
   else
   {
      printf("\n%d",a);
      a++;
   }while(a<=10);
   getch();
}