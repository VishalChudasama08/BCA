#include<stdio.h>
#include<conio.h>
void add();
int n;
void main()
{
  clrscr();
  printf("Enter Number: ");
  scanf("%d",&n);
  add(n);
  getch();
}
void add()
{
  int sum=1,i=1;
  while(i<=n)
  {
    sum*=i;
    i++;
  }
  printf("%d Factorial is %d",n,sum);
}