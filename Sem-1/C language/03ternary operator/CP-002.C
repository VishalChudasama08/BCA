/* write a c program to accept an integer value from user and display it */

#include<stdio.h>
#include<conio.h>

void main()
{
 int a;
 clrscr();

 printf("Enter value of a: ");
 scanf("%d",&a);

   printf("\n The value is %d",a);
   printf("\n Address is %u",&a); // %u is unsigned int;
 getch();
}
