#include<stdio.h>
#include<conio.h>
int Fibonacci(int);
void main()
{
	int n,i=0,c;
	clrscr();
	printf("Enter Number Of Step to Print Fibonacci series: ");
	scanf("%d",&n);
	for(i=0;i<n;i++)
	{
	 printf("%d\n",Fibonacci(i));
	}
	getch();
}
int Fibonacci(int n)
{
	if(n==0)
		return 0;
	else if(n==1)
		return 1;
	else
		return(Fibonacci(n-1)+Fibonacci(n-2));
}
