#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j;
	clrscr();
	for(i=1;i<=5;i++)
	{
		for(j=1;j<=i;j++)
		{
			if(j%2==1)
				printf("%2c",j+64);
			else
				printf("%2c",j+96);
		}
		printf("\n");
	}
	getch();
}