#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b,c;
 clrscr();
 printf("Enter value 1: ");
 scanf("%d",&a);
 printf("Enter value 2: ");
 scanf("%d",&b);

 c=a+b;
 printf("\n%d + %d =%d",a,b,c);
 c=a-b;
 printf("\n%d - %d =%d",a,b,c);
 c=a*b;
 printf("\n%d * %d =%d",a,b,c);
 c=a/b;
 printf("\n%d / %d =%d",a,b,c);
 c=a%b;
 printf("\n%d %% %d =%d",a,b,c);
 getch();
}