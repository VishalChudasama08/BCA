/* write a c program to read a number from the user and display sum there
   number (using while loop)
   ex.
   number:- 153
   digit :- 1 + 5 + 3
   sum   :- 9
*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,sum=0,a;
 clrscr();
 printf("Enter the no.");
 scanf("%d",&n);

 while(n!=0)
 {
  a=n%10;
  sum=sum+a;
  n=n/10;
 }
 printf("sum is: %d",sum);
 getch();
}
