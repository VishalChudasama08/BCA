#include<stdio.h>
#include<conio.h>
void main()
{
    int i,n;
    float sum=0.0;
    clrscr();
    printf("Enter Number:- ");
    scanf("%d",&n);
    for(i=1;i<=n;i++)
    {
	printf("1/%d + ",i);
	sum+=(float)1/i;
    }
    printf("\nsum is %f",sum);
    getch();
}