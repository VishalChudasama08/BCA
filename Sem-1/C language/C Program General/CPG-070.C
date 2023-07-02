#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j,k,sp=5,a;
	clrscr();
	for(i=1;i<=5;i++)
	{
		for(j=1;j<=sp;j++)
		{
				printf(" ");
		}
		sp--;
		for(j=i;j>=1;j--)
		{
			printf("%2d",j);
		}
		for(j=2;j<=i;j++)
		{
			printf("%2d",j);
		}
		printf("\n");
	}
	getch();
}