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
	int f;
	if(a==1)
		return 1;
	else
		f=a*fact(a-1);
	return f;
}
