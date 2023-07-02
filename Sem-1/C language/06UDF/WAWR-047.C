#include<stdio.h>
#include<conio.h>
int add(int sum);
void main()
{
  int sum=1,n;
  clrscr();
  printf("Enter Number: ");
  scanf("%d",&n);
  add(sum);
  printf("Factorial is %d",sum);
  getch();
}
int add(int sum)
{
  int i=1;
  while(i<=n)
  {
    sum*=i;
    i++;
  }
  return(n,sum);
}