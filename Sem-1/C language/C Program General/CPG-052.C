#include<stdio.h>
#include<conio.h>
void main()
{
    int i,n,sum=0,x=12;
    clrscr();
    printf("Enter Number:- ");
    scanf("%d",&n);
    for(i=1;i<=n;i++)
    {
	printf("%d + ",x);
	sum+=x;
	x+=10;
    }
    printf("\nsum is %d",sum);
    getch();
}