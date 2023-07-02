/* write a c program to read to read two numbers from the user an display
   addisan of two numbers using UDF like With Argument No Return */
#include<stdio.h>
#include<conio.h>
void two_add(int,int);
void main()
{
	int a,b;
	clrscr();
	printf("Enter value 1: ");
	scanf("%d",&a);
	printf("Enter value 2: ");
	scanf("%d",&b);
	two_add(a,b);
	getch();
}
void two_add(int a,int b)
{
	int c;
	c=a+b;
	printf("%d + %d = %d",a,b,c);
}