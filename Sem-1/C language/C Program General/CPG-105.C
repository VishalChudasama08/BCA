#include<stdio.h>
#include<conio.h>
void prime(int);
void main()
{
	int a;
	clrscr();
	printf("Enter number :- ");
	scanf("%d",&a);
	prime(a);
	getch();
}
void prime(int a)
{
	int ex,d=0;
	for(ex=2;ex<a;ex++)
	{
		if(a%ex==0)
		{
			d=1;
			break;
		}
	}
	if(d==0)
		printf("\nPrime Number %d",a);
	else
		printf("\nNot Prime Number %d",a);
}

