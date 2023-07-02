/* write a c program to read value in 3*3 matrix and display transpose matrix */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[3][3],i,j;
	clrscr();
	printf("\n Array input\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
		{
			printf("Enter array value a[%d][%d]: ",i,j);
			scanf("%d",&a[i][j]);
		}
	}
	printf("\n Array display\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
		{
			printf("%2d",a[j][i]);
		}
		printf("\n");
	}
	getch();
}