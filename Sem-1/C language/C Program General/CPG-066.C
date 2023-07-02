#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j;
	clrscr();
	for(i=5;i>=1;i--)
	{
		for(j=5;j>=i;j--)
		{
			if(i%2==0)
				printf("%2c",i+96);
			else
				printf("%2c",i+64);
		}
		printf("\n");
	}
	getch();
}