#include<stdio.h>
#include<conio.h>
void main()
{
    int i,n,x=1;
    float sum=0.0;
    clrscr();
    printf("Enter Number:- ");
    scanf("%d",&n);
    for(i=1;i<=n;i++)
    {
	printf("1/%d + ",x);
	sum+=1.0/x;
	x+=2;
    }
    printf("\nsum is %f",sum);
    getch();
}