#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j;
	clrscr();
	for(i=6;i>=1;i--)
	{
		for(j=6;j>=i;j--)
		{
			if(i%2==1)
				printf(" $");
			else
				printf(" *");
		}
		printf("\n");
	}
	getch();
}