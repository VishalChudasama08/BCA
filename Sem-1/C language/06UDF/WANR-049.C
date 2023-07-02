#include<stdio.h>
#include<conio.h>
void two_add();
int n;
void main()
{
  clrscr();
  printf("\nEnter no of step:");
  scanf("%d",&n);
  two_add(n);
  getch();
}
void two_add()
{
  int sum=0,d;
  for( ;n!=0;n=n/10)
  {
  d=n%10;
  sum=(sum*10)+d;
  }
  printf("\nRverse no=%d",sum);
}