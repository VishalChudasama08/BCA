/*
1 2 3 4 5 4 3 2 1
1 2 3 4   4 3 2 1
1 2 3       3 2 1
1 2 	      2 1
1 		1
1 2	      2 1
1 2 3	    3 2 1
1 2 3 4	  4 3 2 1
1 2 3 4 5 4 3 2 1
*/

#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j,sp=-1,k;
	clrscr();
	for(i=5;i>=1;i--)
	{
		for(j=1;j<=i;j++)
		{
			printf("%2d",j);
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
			printf("%2d",j);
		}
		printf("\n");
	}
	sp-=4;
	for(i=2;i<=5;i++)
	{
		for(j=1;j<=i;j++)
		{
			printf("%2d",j);
		}
		for(j=1;j<=sp;j++)
		{
			printf("  ");
		}
		sp-=2;
		if(i==5)
			k=4;
		else
			k=i;
		for(j=k;j>=1;j--)
		{
			printf("%2d",j);
		}
		printf("\n");
	}
	getch();
}