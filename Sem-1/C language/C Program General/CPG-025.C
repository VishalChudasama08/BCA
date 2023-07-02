#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b,c;
 clrscr();
 printf("Enter 1st Value: ");
 scanf("%d",&a);
 printf("Enter 2nd Value: ");
 scanf("%d",&b);
 printf("Enter 3rd Value: ");
 scanf("%d",&c);
 if(a>b)
 {
  if(a>c)
     printf("1st is max");
  else
     printf("3rd is max");
 }
 else
 {
  if(b>c)
     printf("2nd is max");
  else
     printf("3rd is max");
 }
 getch();
}