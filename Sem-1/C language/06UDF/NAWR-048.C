#include<stdio.h>
#include<conio.h>
void add();
int ex,sum=0;
void main()
{
  clrscr();
  add();
  if(ex==sum)
     printf("\nArmstong number");
  else
     printf("\nNot Armstong number");
  getch();
}
void add()
{
  int n,d;
  printf("\nEnter a number: ");
  scanf("%d",&n);
  ex=n;
  for( ;n!=0;n=n/10)
  {
    d=n%10;
    sum+=(d*d*d);
  }

}