#include<stdio.h>
#include<conio.h>
void main()
{
    int i,n;
    clrscr();
    printf("Enter Number of Step:- ");
    scanf("%d",&n);
    for(i=2;i<=n;i++)
    {
	if(n%i==0)
	   printf("\t%2d",i);
    }
    getch();
}