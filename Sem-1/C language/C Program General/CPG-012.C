#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b,c;
 clrscr();
 printf("Enter 1st number: ");
 scanf("%d",&a);
 printf("Enter 2nd number: ");
 scanf("%d",&b);
 c=a;
 a=b;
 b=c;
 printf("\n1st value is %d\n2nd value is %d",a,b);
 getch();
}