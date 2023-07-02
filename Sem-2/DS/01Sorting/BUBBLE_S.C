//bubble sort
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
	int a[MAX],i,n;
	printf("\nEnter the Element : ");
	scanf("%d",&n);
	for(i=0;i<n;i++)
	{
		printf("Enter Element %d: ",i+1);
		scanf("%d",&a[i]);
	}
	printf("\n%d values before sorting are\n",n);
	for(i=0;i<n;i++)
	{
		printf("\n%4d",a[i]);
	}
	bubble_sort(a,n);
	printf("\n%d values after sorting are \n",n);
	for(i=0;i<n;i++)
	{
		printf("\n%4d",a[i]);
	}
	getch();
}
int bubble_sort(int a[],int n)
{
	int i,j,t;
	for(i=0;i<n-1;i++)
	{
		for(j=0;j<n-1-i;j++)
		{
			if(a[j]>a[j+1])
			{
					 t=a[j];
				  a[j]=a[j+1];
				a[j+1]=t;
			}
		}
	}
}