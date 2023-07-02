/* write a c program to print 10 to 1 using do.... while loop */

#include<stdio.h>
#include<conio.h>
void main()
{
 int i;
 clrscr();
 i=10;
 do
 {
  printf("\n%2d",i);
  i=i-1;
 }while(i>=1);
 getch();
}