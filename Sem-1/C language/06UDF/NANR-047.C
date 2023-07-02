#include<stdio.h>
#include<conio.h>
void add();
void main()
{
  clrscr();
  add();
  getch();
}
void add()
{
  int n,sum=1,i=1;
  printf("Enter Number: ");
  scanf("%d",&n);
  while(i<=n)
  {
    sum*=i;
    i++;
  }
  printf("%d Factorial is %d",n,sum);
}