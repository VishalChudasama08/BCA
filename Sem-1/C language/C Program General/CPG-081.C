#include<stdio.h>
#include<conio.h>
void main()
{
    int a[3][3],i,j,sum=0,sum1[3];
    clrscr();
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
            printf("Enter Array Value a[%d][%d] : ",i,j);
            scanf("%d",&a[i][j]);
        }
    }
    for(i=0;i<3;i++) 
    {
	sum=0;
	sum1[i]=0;
        for(j=0;j<3;j++) 
        {
	    sum+=a[i][j];
	    sum1[i]+=a[j][i];
	    printf("%3d",a[i][j]);
        }
        printf(" = %d\n",sum);
    }
    printf("  =  =  =\n");
    for(i=0;i<3;i++)
	printf("%3d",sum1[i]);
    getch();
}