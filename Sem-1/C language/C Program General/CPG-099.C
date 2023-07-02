#include<stdio.h>
#include<conio.h>
void addition();
void main()
{
	addition();
}
void addition()
{
	int a,b,c;
	clrscr();
	printf("Enter 1st Number ");
	scanf("%d",&a);
	printf("Enter 2nd Number ");
	scanf("%d",&b);
	c=a+b;
	printf("\n Addition Is %d",c);
	getch();
}