#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n,j;
	long fact;
	clrscr();
	printf("Number\tSquare\tCube\tFactorial\n");
	for(i=1;i<=10;i++)
	{
		fact=1;
		for(j=1;j<=i;j++)
		{
			fact*=j;
		}
		printf("%2d\t%2d\t%2d\t%2ld\n",i,i*i,i*i*i,fact);
	}
	getch();

}