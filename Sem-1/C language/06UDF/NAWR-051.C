#include<stdio.h>
#include<conio.h>
int add();
int sum=0;
void main()
{
  clrscr();
  add(sum);
  printf("sum is: %d",sum);
  getch();
}
int add()
{
  int n,a;
  printf("Enter the no.");
  scanf("%d",&n);
  for( ;n!=0;n=n/10)
  {
      a=n%10;
    sum=sum+a;
  }
  return(sum);
}