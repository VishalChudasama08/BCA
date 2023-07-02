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
  int n,ex,sum=0,d;
  printf("\nEnter a number: ");
  scanf("%d",&n);
  ex=n;
  for( ;n!=0;n=n/10)
  {
    d=n%10;
    sum+=(d*d*d);
  }
  if(ex==sum)
     printf("\nArmstong number");
  else
     printf("\nNot Armstong number");
}