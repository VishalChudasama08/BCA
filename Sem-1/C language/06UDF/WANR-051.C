#include<stdio.h>
#include<conio.h>
void add();
int n;
void main()
{
  clrscr();
  printf("Enter the no.");
  scanf("%d",&n);
  add();
  getch();
}
void add()
{
  int sum=0,a;
  for( ;n!=0;n=n/10)
  {
      a=n%10;
    sum=sum+a;
  }
  printf("sum is: %d",sum);
}