#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b,c;
 clrscr();
 printf("1st number: ");
 scanf("%d",&a);
 printf("2nd number: ");
 scanf("%d",&b);
 printf("3rd number: ");
 scanf("%d",&c);
 if(a>b && a>c)
     printf("1st is Max");
 if(b>a && b>c)
     printf("2nd is Max");
 if(c>a && c>b)
     printf("3rd is Max");
 getch();
}