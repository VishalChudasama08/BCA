#include<stdio.h>
#include<conio.h>
void main()
{
 int a;
 clrscr();
 printf("Enter number: ");
 scanf("%d",&a);
 if(a%2==0)
 {
  printf("\nEven");
 }
 if(a%2==1)
 {
  printf("\nOdd");
 }
 getch();
}