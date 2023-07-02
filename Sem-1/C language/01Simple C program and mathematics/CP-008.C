/* write a program to inpute two values and swap them.(without using third varible) */
#include<stdio.h>
#include<conio.h>
main()
{
 int a=5,b=10;
 clrscr();

 printf("Before swap");
 printf("\na is: %d",a);
 printf("\nb is: %d",b);

 a=a+b; // 15 =  5 + 10
 b=a-b; //  5 = 15 - 10
 a=a-b; // 10 = 15 - 5

 printf("\n\nAfter swap");
 printf("\na is: %d",a);
 printf("\nb is: %d",b);
 getch();
}