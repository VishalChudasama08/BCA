/* write a c program to read a number from the user to check and display that
   number prime or not (using while loop)
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int n,i=2,f=0;
 clrscr();
 printf("Enter number: ");
 scanf("%d",&n);

 while(i<n)
 {
  if(n%i==0)
  {
   f=1;
   break;
  }
  i++;
 }
 if(f==0)
	printf("prime number: %d",n);
 else
	printf("\nNot prime number: %d",n);
 getch();
}