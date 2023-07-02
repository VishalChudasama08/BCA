/* write a c program to read a number from the user and display sum there
   number (using for loop)
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

 for( ;n!=0;n=n/10)
 {
  a=n%10;
  sum=sum+a;
 }
 printf("sum is: %d",sum);
 getch();
}
