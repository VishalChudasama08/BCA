/* write a program to inpute two values and swap them.(with using third varible) */
#include<stdio.h>
#include<conio.h>
main()
{
 int a=5,b=10,c;
 clrscr();

 printf("Before swap");
 printf("\na is: %d",a);
 printf("\nb is: %d",b);

 c=a;
 a=b;
 b=c;

 printf("\n\nAfter swap");
 printf("\na is: %d",a);
 printf("\nb is: %d",b);
 getch();
}