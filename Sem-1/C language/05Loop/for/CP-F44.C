/* write a c program to print 1 to 10 (using for loop) */

#include<stdio.h>
#include<conio.h>
void main()
{
 int i;
 clrscr();
 for(i=1;i<=10;i=i+1)
 {
  printf("\n%2d",i);
 }
 getch();
}