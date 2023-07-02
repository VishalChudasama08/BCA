#include<stdio.h>
#include<conio.h>
int two_add(int v);
void main()
{
  int n;
  clrscr();
  printf("\nEnter no of step:");
  scanf("%d",&n);
  two_add(v);
  printf("\nRverse no=%d",v);
  getch();
}
int two_add(int v)
{
  int d,v=0;
  for( ;n!=0;n=n/10)
  {
  d=n%10;
  v=(v*10)+d;
  }
  return(v);
}