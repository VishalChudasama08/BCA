#include<stdio.h>
#include<conio.h>
void avg(int [],int); // UDF
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index Value : ",i);
		scanf("%d",&a[i]);
	}
	avg(a,9); // UDF CALL
	getch();
}
void avg(int z[],int n)
{ // UDF
	int i,sum=0;
	float avg;
	printf("\n Array Values \n");
	for(i=0;i<=n;i++)
	{
		printf("\n%2d",z[i]);
		sum+=z[i];
	}
	avg = (float)sum/n;
	printf("\n Array Average is %f",avg);
}