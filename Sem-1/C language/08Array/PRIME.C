/* find a prime number in array */
#include<stdio.h>
#include<conio.h>
void main()
{
  int a[10],i,ex,sum,f;
  clrscr();
  for(i=0;i<=9;i++)
  {
    printf("Enter %d array element:- ",i);
    scanf("%d",&a[i]);
  }
  for(i=0;i<=9;i++)
  {
    f=0;
    for(ex=2;ex<a[i];ex++)
    {
      if(a[i]%2==0)
      {
	 f=1;
	 break;
      }
    }
    if(f==0)
      printf("\n Prime Number %d",a[i]);
  }
  getch();
}