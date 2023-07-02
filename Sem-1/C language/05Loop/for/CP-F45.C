/* write a c program to print 10 to 1 (using for loop) */

#include<stdio.h>
#include<conio.h>
void main()
{
 int i;
 clrscr();

 for(i=10;i>=1;i=i-1)
 {
  printf("\n%2d",i);
 }
 getch();
}