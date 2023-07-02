#include<stdio.h>
#include<conio.h>
void addition(int, int);
void main()
{
	int a,b,c;
	clrscr();
	printf("Enter 1st Number ");
	scanf("%d",&a);
	printf("Enter 2nd Number ");
	scanf("%d",&b);
	addition(a,b);
	getch();
}
void addition(int a, int b)
{
	int c;
	c=a+b;
	printf("\n Addition Is %d",c);
}