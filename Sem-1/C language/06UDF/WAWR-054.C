#include<stdio.h>
#include<conio.h>
int add();
int n;
void main()
{
  int i,f=0;
  clrscr();
  printf("Enter number: ");
  scanf("%d",&n);
  add(n);
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
  getch();
}
int add()
{
  return(n);
}