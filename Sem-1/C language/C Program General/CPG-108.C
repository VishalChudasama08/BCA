#include<stdio.h>
#include<conio.h>
void sort(int [],int );
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index Value : ",i);
		scanf("%d",&a[i]);
	}
	clrscr();
	printf("\n Unorted Array Values \n");
	for(i=0;i<=9;i++)
	{
		printf("\n%2d",a[i]);
	}
	sort(a,9);
	getch();
}
void sort(int a[],int n)
{
	int i,j,ex;
	for(i=0;i<=n;i++)
	{
		for(j=i;j<=n;j++)
		{
			if(a[i]>a[j])
			{
				ex=a[j];
				a[j]=a[i];
				a[i]=ex;
			}
		}
	}
	printf("\n\n Sorted Array Values \n");
	for(i=0;i<=9;i++)
	{
		printf("\n%2d",a[i]);
	}
}