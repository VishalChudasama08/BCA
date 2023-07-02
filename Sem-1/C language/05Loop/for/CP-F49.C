/* write a c program and print reverse number (using for loop) */

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,sum=0,d;
 clrscr();

 printf("\nEnter no of step:");
 scanf("%d",&n);
 for( ;n!=0;n=n/10)
 {
  d=n%10;
  sum=(sum*10)+d;
 }
 printf("\nRverse no=%d",sum);
 getch();
}