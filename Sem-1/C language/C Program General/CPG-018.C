#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b;
 clrscr();
 printf("Enter value: ");
 scanf("%d",&a);
 printf("Enter value: ");
 scanf("%d",&b);
 a=a+b;
 b=a-b;
 a=a-b;
 printf("\nvalue of a is %d",a);
 printf("\nvalue of b is %d",b);
 getch();
}