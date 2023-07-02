#include<stdio.h>
#include<conio.h>
void add();
int ex,sum=0;
void main()
{
  int n,d;
  clrscr();
  printf("\nEnter a number: ");
  scanf("%d",&n);
  ex=n;
  for( ;n!=0;n=n/10)
  {
    d=n%10;
    sum+=(d*d*d);
  }
  add();
  getch();
}
void add()
{
  if(ex==sum)
     printf("\nArmstong number");
  else
     printf("\nNot Armstong number");
}
