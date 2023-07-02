/* write a program to cout factorial of number 5 (using while loop). */

#include<stdio.h>
#include<conio.h>
void main()
{
 int a=1, k=1;
 clrscr();
 while(a<=5)
 {
  k=k*a;
  a++;
 }
 printf("\n%d",k);
 getch();
}