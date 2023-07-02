#include<stdio.h>
#include<conio.h>
void main()
{
 int n,ex,a,sum=0;
 clrscr();

 printf("\nEnter the No: ");
 scanf("%d",&n);
 ex=n;
 while(n!=0)
 {
  a=n%10;
  sum+=(a*a*a);
  n=n/10;
 }
 if(ex==sum)
    printf("\nArmstong number");
 else
    printf("\nNot Armstong number");
 getch();
}