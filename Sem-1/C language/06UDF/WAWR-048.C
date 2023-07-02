#include<stdio.h>
#include<conio.h>
int add(int number);
void main()
{
  int number;
  clrscr();
  printf("\nEnter a number: ");
  scanf("%d",&number);
  if(add(number)==0)
	 printf("\nArmstong number");
  else
	 printf("\nNot Armstong number");
 getch();
}
int add(int number)
{
  int d,sum=0,n=number;
  while(n!=0)
  {
	d=n%10;
	sum+=(d*d*d);
	n=n/10;
 }
  if(sum==number)
     return 0;
  else
     return 1;
}