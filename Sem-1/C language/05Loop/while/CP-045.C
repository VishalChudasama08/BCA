/* write a c program to print 10 to 1 (using while loop) */

#include<stdio.h>
#include<conio.h>
main()
{
 int i;
 clrscr();
 i=10;
 while(i>=1)
 {
  printf("\n%2d",i);
  i--;
 }
 getch();
}