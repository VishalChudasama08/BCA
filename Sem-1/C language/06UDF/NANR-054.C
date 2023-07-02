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
  int n,i,f=0;
  printf("Enter number: ");
  scanf("%d",&n);
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