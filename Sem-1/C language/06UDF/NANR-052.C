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
  int n,osum=0,esum=0,d;
  printf("\nEnterv number: ");
  scanf("%d",&n);
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