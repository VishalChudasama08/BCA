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
  int n,sum=0,a;
  printf("Enter the no.");
  scanf("%d",&n);
  for( ;n!=0;n=n/10)
  {
      a=n%10;
    sum=sum+a;
  }
  printf("sum is: %d",sum);
}