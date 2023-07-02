#include<stdio.h>
#include<conio.h>
int fact(int);
void main()
{
	int n,rec;
	clrscr();
	printf("Enter Number :- ");
	scanf("%d",&n);
	rec=fact(n);
	printf("\n Factorial Is %d",rec);
	getch();
}
int fact(int a)
{
	int i,f=1;
	for(i=1;i<=a;i++)
	{
		f*=i;
	}
	return f;
}