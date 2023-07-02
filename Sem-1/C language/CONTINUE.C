#include<stdio.h>
#include<conio.h>
main()
{
   int a;
   clrscr();
   for(a=1;a<=10;a++)
   {
      if(a==5)
	 continue;
      else
	 printf("\n%d",a);
   }
   getch();
}