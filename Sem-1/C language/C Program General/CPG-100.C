#include<stdio.h>
#include<conio.h>
int addition();
void main()
{
	int c;
	c=addition();
	printf("\n Addition Is %d",c);
	getch();
}
int addition()
{
	int a,b;
	clrscr();
	printf("Enter 1st Number ");
	scanf("%d",&a);
	printf("Enter 2nd Number ");
	scanf("%d",&b);
	return(a+b);
}
