/* Write a c program to input integer number from user and display its
   factoroal. */

#include<stdio.h>
#include<conio.h>
void main()
{
	int n,sum=1,i=1;
	clrscr();
	printf("Enter Number: ");
	scanf("%d",&n);
	while(i<=n)
	{
		sum*=i;
		i++;
	}
	printf("%d Factorial is %d",n,sum);
	getch();
}