#include<stdio.h>
#include<conio.h>
void add();
int n;
void main()
{
  clrscr();
  printf("\nEnterv number: ");
  scanf("%d",&n);
  add(n);
  getch();
}
void add()
{
  int osum=0,esum=0,d;
  for( ;n!=0;n=n/10)
  {
    d=n%10;
    if(d%2==0)
       esum+=d;
    else
       osum+=d;
  }
  printf("\nEven digit sum: %d",esum);
  printf("\nodd digit osum: %d",osum);
}