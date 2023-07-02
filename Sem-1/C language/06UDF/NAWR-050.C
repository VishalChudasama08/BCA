#include<stdio.h>
#include<conio.h>
int add();
int ex,sum=0;
void main()
{
  clrscr();
  add();
  if(ex==sum)
	printf("\nPolindrom number");
  else
	printf("\nNot polindrom number");
  getch();
}
int add()
{
  int n,d;
  printf("\nEnter a number: ");
  scanf("%d",&n);
  ex=n;
  for( ;n!=0;n=n/10)
  {
	d=n%10;
      sum=(sum*10)+d;
  }
  return(sum);
}