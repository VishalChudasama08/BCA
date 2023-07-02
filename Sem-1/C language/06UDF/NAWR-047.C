#include<stdio.h>
#include<conio.h>
int add();
int n,sum;
void main()
{
  clrscr();
  add(n,sum);
  printf("%d Factorial is %d",n,sum);
  getch();
}
int add()
{
  int i=1;
  printf("Enter Number: ");
  scanf("%d",&n);
  sum=1;
  while(i<=n)
  {
    sum*=i;
    i++;
  }
  return(n,sum);
}