#include<stdio.h>
#include<conio.h>
void add();
int n;
void main()
{
  clrscr();
  printf("\nEnter a number: ");
  scanf("%d",&n);
  add();
  getch();
}
void add()
{
  int ex,sum=0,d;
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