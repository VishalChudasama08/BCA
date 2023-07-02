#include<stdio.h>
#include<conio.h>
void main()
{
    int a[2][2][2][2][2],i,j,k,z,x;
    clrscr();
    printf("Enter Fifth Dimensional Array Value\n");
    for(i=0;i<2;i++)
    {
	for(j=0;j<2;j++)
	{
	    for(k=0;k<2;k++)
	    {
		for(z=0;z<2;z++)
		{
		    for(x=0;x<2;x++)
		    {
			printf("[%d][%d][%d][%d][%d]:-",i,j,k,z,x);
			scanf("%d",&a[i][j][k][z][x]);
		    }
		}
	    }
	}
    }
    printf("\nDisplay Fifth Dimensional Array Value\n\n");
    for(i=0;i<2;i++)
    {
	for(j=0;j<2;j++)
	{
	    for(k=0;k<2;k++)
	    {
		for(z=0;z<2;z++)
		{
		    for(x=0;x<2;x++)
		    {
			printf("[%d][%d][%d][%d][%d]:- %d ",i,j,k,z,x,a[i][j][k][z][x]);
		    }
		}
	    }
	}
    }
    getch();
}