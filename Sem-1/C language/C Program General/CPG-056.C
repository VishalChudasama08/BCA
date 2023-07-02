#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n,ex,a,sum=0;
	clrscr();
	for(i=1;i<=1000;i++)
	{
		ex=i;
		sum=0;
		while(ex!=0)
		{
			a=ex%10;
			sum+=a*a*a;
			ex=ex/10;
		}
		if(i==sum)
			printf("\nNumber is Armstrong %d",i);
	}
	getch();
}