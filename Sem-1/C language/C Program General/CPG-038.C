#include<stdio.h>
#include<conio.h>
void main()
{
 int n,a=1;
 clrscr();
 printf("Enter Number of step value: ");
 scanf("%d",&n);
 while(a<=n)
 {
  printf("\n%d",a);
  a*=2;
 }
 getch();
}