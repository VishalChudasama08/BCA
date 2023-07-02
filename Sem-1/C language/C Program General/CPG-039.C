#include<stdio.h>
#include<conio.h>
void main()
{
 int n,a=100;
 clrscr();
 printf("Enter Number of stop value: ");
 scanf("%d",&n);
 while(a>=n)
 {
  printf("\n%d",a);
  a--;
 }
 getch();
}