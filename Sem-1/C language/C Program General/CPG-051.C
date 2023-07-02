#include<stdio.h>
#include<conio.h>
void main()
{
    long i,j,sum=0,n,fact;
    clrscr();
    printf("Enter Number:- ");
    scanf("%ld",&n);
    for(i=1;i<=n;i++)
    {
	fact=1;
	for(j=1;j<=i;j++)
	{
	    fact=j;
	}
	printf("%ld! +",i);
	sum+=fact;
    }
    printf("\nFactorial sum is %ld",sum);
    getch();
}