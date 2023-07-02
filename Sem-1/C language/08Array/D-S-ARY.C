/* dogit sum in array */
#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n[10],sum,a;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter the %d number: ",i);
		scanf("%d",&n[i]);
	}
	for(i=0;i<=9;i++)
	{
		sum=0;
		while(n[i]!=0)
		{
			a=n[i]%10;
			sum=sum+a;
			n[i]=n[i]/10;

		}
		printf("\nSum is %d number: %d",i,sum);
	}
	getch();
}