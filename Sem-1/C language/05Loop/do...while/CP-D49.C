/* write a c program and print reverse number (using do.... while loop) */

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,sum=0,d;
 clrscr();

 printf("\nEnter no of step:");
 scanf("%d",&n);
 do
 {
  d=n%10;
  sum=(sum*10)+d;
  n=n/10;
 }while(n!=0);
 printf("\nRverse no=%d",sum);
 getch();
}