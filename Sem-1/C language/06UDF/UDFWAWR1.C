/* write a c program to read two numbers from the user on display addition of
   two numbers using UNF like to With Argument With Return. */
#include<stdio.h>
#include<conio.h>
int two_add(int,int);
void main()
{
	int a,b,c;
	clrscr();
	printf("Enter value 1: ");
	scanf("%d",&a);
	printf("Enter value 2: ");
	scanf("%d",&b);
	two_add(a,b);
	c=a+b;
	printf("%d + %d = %d",a,b,c);
	getch();
}
int two_add(int a,int b)
{
	return(a,b);
}