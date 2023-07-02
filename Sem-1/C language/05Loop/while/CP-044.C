/* write a c program to print 1 to 10 (using while loop) */

#include<stdio.h>
#include<conio.h>
main()
{
 int i;
 clrscr();
 i=1;
 while(i<=10)
 {
  printf("\n%2d",i);
  i++;
 }
 getch();
}