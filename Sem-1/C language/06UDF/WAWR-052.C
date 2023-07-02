#include<stdio.h>
#include<conio.h>
int add();
int n;
int main()
{
  int osum=0,esum=0,d;
  clrscr();
  printf("\nEnterv number: ");
  scanf("%d",&n);
  add(n);
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
  getch();
  return(0);
}
int add()
{
  return(n);
}