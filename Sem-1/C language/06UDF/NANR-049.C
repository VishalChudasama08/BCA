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
  int n,sum=0,d;
  printf("\nEnter no of step:");
  scanf("%d",&n);
  for( ;n!=0;n=n/10)
  {
  d=n%10;
  sum=(sum*10)+d;
  }
  printf("\nRverse no=%d",sum);
}