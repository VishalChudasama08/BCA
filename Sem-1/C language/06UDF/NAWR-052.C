#include<stdio.h>
#include<conio.h>
void add();
int osum=0, esum=0;
int main()
{
  clrscr();
  add();
  printf("\nEven digit sum: %d",esum);
  printf("\nodd digit osum: %d",osum);
  getch();
  return(0);
}
void add()
{
  int n,d;
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
}