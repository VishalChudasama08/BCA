/* write a program to cout factorial of number 5 (using for loop). */

#include<stdio.h>
#include<conio.h>
void main()
{
 int a, k=1;
 clrscr();

 for(a=1;a<=5;a++)
 {
  k=k*a;
 }
 printf("\n%d",k);
 getch();
}