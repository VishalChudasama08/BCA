#include<stdio.h>
#include<conio.h>
void add();
int n;
void main()
{
  clrscr();
  printf("Enter number: ");
  scanf("%d",&n);
  add();
  getch();
}
void add()
{
  int f=0,i;
  for(i=2;i<n;i++)
  {
    if(n%i==0)
    {
       f=1;
       break;
    }
  }
  if(f==0)
	printf("prime number: %d",n);
  else
	printf("\nNot prime number: %d",n);
}