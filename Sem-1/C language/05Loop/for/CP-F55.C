/* write a c program to print following output
   0 1 1 2 3 5 ........ N
   (using for loop)
*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int i,n,a=1,b=0,c=0;
 clrscr();

 printf("Enter number of step: ");
 scanf("%d",&n);

 for(i=1;i<n;i++)
 {
  printf("\n%d",c);
  c=a+b;
  a=b;
  b=c;
 }
 getch();
}