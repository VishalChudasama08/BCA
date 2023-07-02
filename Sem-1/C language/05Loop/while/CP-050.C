/* write a c program to read number from the user and check that number is
   polindrom number or not
   ex.
   polindrom number means a number and its reverce number are same
   121<-->121
   (usimg while loop)
*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,ex,sum=0,d;
 clrscr();

 printf("\nEnter a number: ");
 scanf("%d",&n);

 ex=n;
 while(n!=0)
 {
	d=n%10;
  sum=(sum*10)+d;
	n=n/10;
 }
 if(ex==sum)
	printf("\nPolindrom number");
 else
	printf("\nNot polindrom number");

 getch();
}