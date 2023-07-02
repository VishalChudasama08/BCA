// Reverse number in array
#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n[10],sum,d;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter no of Array step: ");
		scanf("%d",&n[i]);
	}
	for(i=0;i<=9;i++)
	{
		sum=0;
		while(n[i]!=0)
		{
			d=n[i]%10;
			sum=(sum*10)+d;
			n[i]=n[i]/10;
		}
		printf("\nReverse number: %d",sum);
	}
	getch();
}