/* write a c program to display Average of Array element */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,sum=0;
	float average;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter value in Array: ");
		scanf("%d",&a[i]);
	}
	for(i=0;i<=9;i++)
	{
		printf("\n Array value is : %d",a[i]);
		sum+=a[i];
	}
	average=(float)sum/10;
	printf("\n Average is %f",average);
	getch();
}