//selection sort
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
	int a[MAX],i,j,n;
	clrscr();
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
	selectionsort(a,n);
	printf("\n%d values after sorting are \n",n);
	for(i=0;i<n;i++)
	{
		printf("\n%4d",a[i]);
	}
	getch();
}
int selectionsort(int a[], int n)
{
	int i,j,temp;
	for(i=0;i<n;i++)
	{
		for(j=i;j<n;j++)
		{
			if(a[j]<a[i])
			{
				temp=a[i];
				a[i]=a[j];
				a[j]=temp;
			}
		}
	}
	return 0;
}
