/* to accept 3*3 matrix and display row wise sum */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[3][3],i,j,sum=0;
	clrscr();
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
		{
			printf("Enter array value a[%d][%d]: ",i,j);
			scanf("%d",&a[i][j]);
		}
	}
	for(i=0;i<3;i++)
	{
		sum=0;
		for(j=0;j<3;j++)
		{
			sum+=a[i][j];
			printf("%2d",a[i][j]);
		}
		printf(" =%d\n",sum);
	}
	getch();
}