#include<stdio.h>
#include<conio.h>
int add(int v);
void main()
{
  int v;
  clrscr();
  printf("\nEnter a number: ");
  scanf("%d",&v);
  if(add(v)==0)
	printf("\nPolindrom number");
  else
	printf("\nNot polindrom number");
  getch();
}
int add(int v)
{
  int n,sum=0,d;
  n=v;
  for( ;n!=0;n=n/10)
  {
	d=n%10;
      sum=(sum*10)+d;
  }
  if(sum==v)
     return 0;
  else
     return 1;
}