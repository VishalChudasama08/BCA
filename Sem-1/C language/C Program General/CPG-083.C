#include<stdio.h>
#include<conio.h>
void main() 
{
    int a[3][3],b[3][3],c[3][3],i,j,k;
    clrscr();
    printf("Enter 1st Array Element :- \n");
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
	    printf("a[%d][%d]: ",i,j);
	    scanf("%d",&a[i][j]);
        }
    }
    printf("\nEnter 2ed Array Element :-\n");
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
	    printf("b[%d][%d]: ",i,j);
	    scanf("%d",&b[i][j]);
        }
    }
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
            c[i][j]=0;
            for(k=0;k<=2;k++) 
            {
                c[i][j]+=a[i][k]*b[k][j];
            }
        }
    }
    clrscr();
    printf("\n1st Array disply\n");
    for(i=0;i<3;i++)
    {
	for(j=0;j<3;j++)
	{
	    printf("%2d ",a[i][j]);
	}
	printf("\n");
    }
    printf("\n2st Array disply\n");
    for(i=0;i<3;i++)
    {
	for(j=0;j<3;j++)
	{
	    printf("%2d ",b[i][j]);
	}
	printf("\n");
    }
    printf("\nAddition of Array disply\n");
    for(i=0;i<3;i++)
    {
	for(j=0;j<3;j++)
	{
	    printf("%2d ",c[i][j]);
        }
        printf("\n");
    }
    getch();
}