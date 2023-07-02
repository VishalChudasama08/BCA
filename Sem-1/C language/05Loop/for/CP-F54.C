/* write a c program to read a number from the user to check and display that
   number prime or not (using do loop)
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int n,i,f=0;
 clrscr();
 printf("Enter number: ");
 scanf("%d",&n);

 for(i=2;i<n;i++)
 {
  if(n%i==0)
  {
   f=1;
   break;
  }
 }
 if(f==0)
	printf("prime number: %d",n);
 else
	printf("\nNot prime number: %d",n);
 getch();
}