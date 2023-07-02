#include<stdio.h>
#include<conio.h>
void main()
{
 float x,y;
 clrscr();
 printf("Enter value of X: ");
 scanf("%f",&x);
 printf("Enter value of Y: ");
 scanf("%f",&y);
 printf("\n(x+y)/(x-y)=%f",(x+y)/(x-y));
 printf("\n(x+y)/2=%f",(x+y)/2);
 printf("\n(x+y)*(x-y)=%f",(x+y)*(x-y));
 getch();
}