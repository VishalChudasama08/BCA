/* write a c program and print reverse number (using while loop) */

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,sum=0,d;
 clrscr();

 printf("\nEnter no of step:");
 scanf("%d",&n);
 while(n!=0)
 {
  d=n%10;
  sum=(sum*10)+d;
  n=n/10;
 }
 printf("\nRverse no=%d",sum);
 getch();
}