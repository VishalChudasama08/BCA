/* write a c program to print 1 to 10 using do.... while loop */

#include<stdio.h>
#include<conio.h>
 void main()
{
 int i;
 clrscr();
 i=1;
 do
 {
  printf("\n%2d",i);
  i=i+1;
 }while(i<=10);

 getch();
}