#include<stdio.h>
#include<conio.h>
int add();
int f=0,n;
void main()
{
  clrscr();
  add(f);
  if(f==0)
	printf("prime number: %d",n);
  else
	printf("\nNot prime number: %d",n);
  getch();
}
int add()
{
  int i;
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
  return(f);
}