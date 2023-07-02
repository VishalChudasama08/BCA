/* Write a c proram to input integer number and check whether it is
   palindromes or not. */

#include<stdio.h>
#include<conio.h>
void main()
{
	int n,sum=0,d,ex;
	clrscr();
	printf("\nEnter Number: ");
	scanf("%d",&n);
	ex=n;
	while(n!=0)
	{
		d=n%10;
		sum=(sum*10)+d;
		n=n/10;
	}
	if(sum==ex)
		printf("Polindrome No");
	else
		printf("Not Polindrome No");
	getch();
}
