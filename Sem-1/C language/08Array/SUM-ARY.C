/* write a c program to Accept 10 values in Array and display Array and sum of Array. */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,sum=0;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index Value : ",i);
		scanf("%d",&a[i]);
	}
	clrscr();
	printf("\n Array values \n");
	for(i=0;i<=9;i++)
	{
		printf("\n%2d",a[i]);
		sum+=a[i];
	}
	printf("\n Array sum is %d",sum);
	getch();
}