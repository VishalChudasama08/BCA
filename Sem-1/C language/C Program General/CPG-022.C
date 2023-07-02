#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b;
 clrscr();
 printf("Enter a value: ");
 scanf("%d",&a);
 printf("Enter a value: ");
 scanf("%d",&b);
 if(a>b)
     printf("1st is Max");
 if(a<b)
     printf("2nd is Max");
 getch();
}