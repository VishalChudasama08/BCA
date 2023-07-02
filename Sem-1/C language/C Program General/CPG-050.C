#include<stdio.h>
#include<conio.h>
void main()
{
    int i,n,a=1,b=0,c=0;
    clrscr();
    printf("\nEnter Number of Step: ");
    scanf("%d",&n);
    for(i=1;i<n;i++)
    {
	printf("\n%d",c);
	c=a+b;
	a=b;
	b=c;
    }
    getch();
}