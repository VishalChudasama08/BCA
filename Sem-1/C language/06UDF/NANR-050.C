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
      sum=(sum*10)+d;
  }
  if(ex==sum)
	printf("\nPolindrom number");
  else
	printf("\nNot polindrom number");
}