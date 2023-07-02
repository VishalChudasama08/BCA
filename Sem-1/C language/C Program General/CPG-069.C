#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j,k,sp=-1,a;
	clrscr();
	for(i=5;i>=1;i--)
	{
		for(j=1;j<=i;j++)
		{
			printf("%2c",j+64);
		}
		for(j=1;j<=sp;j++)
		{
			printf("  ");
		}
		sp+=2;
		if(i==5)
			k=4;
		else
			k=i;
		for(j=k;j>=1;j--)
		{
			printf("%2c",j+64);
		}
		printf("\n");
	}
	getch();
}