#include<stdio.h>
#include<conio.h>
int addition(int,int );
void main()
{
	int a,b,c;
	clrscr();
	printf("Enter 1st Number ");
	scanf("%d",&a);
	printf("Enter 2nd Number ");
	scanf("%d",&b);
	c=addition(a,b);
	printf("\n Addition Is %d",c);
	getch();
}
int addition(int a,int b)
{
	return(a+b);
}
