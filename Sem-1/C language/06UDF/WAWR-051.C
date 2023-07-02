#include<stdio.h>
#include<conio.h>
int add(int);
int n,sum,a;
int main()
{
  clrscr();
  printf("Enter the no.");
  scanf("%d",&n);
  add(n);

  printf("sum is: %d",sum);
  getch();
}
int add()
{
  for( ;n!=0;n=n/10)
  {
      a=n%10;
    sum=sum+a;
  }
  return(sum);
}