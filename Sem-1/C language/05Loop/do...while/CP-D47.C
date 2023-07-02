/* write a program to cout factorial of number 5 (using do.... while loop). */

#include<stdio.h>
#include<conio.h>
void main()
{
 int a=1, k=1;
 clrscr();
 do
 {
  k=k*a;
  a++;
 }while(a<=5);
 printf("\n%d",k);
 getch();
}