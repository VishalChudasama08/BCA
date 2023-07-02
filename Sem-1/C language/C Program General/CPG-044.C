/* write a c program to input an integer number and display sum of even digit
   and odd digits. */

#include<stdio.h>
#include<conio.h>
void main()
{
	int d,esum=0,osum=0,n,ex;
	clrscr();
	printf("Enter Number: ");
	scanf("%d",&n);
	while(n!=0)
	{
		d=n%10;
		if(d%2==0)
			esum+=d;
		else
			osum+=d;
		n/=10;
	}
	printf("\nEven digit is sum %d",esum);
	printf("\nOdd digit is sum %d",osum);
	getch();
}
