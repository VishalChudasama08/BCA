#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,j,ex;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index Value : ",i);
		scanf("%d",&a[i]);
	}
	clrscr();
	printf(" Unorted Array Values \n");
	for(i=0;i<=9;i++)
	{
		printf("\n%2d",a[i]);
	}
	for(i=0;i<=9;i++)
	{
		for(j=i;j<=9;j++)
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
	getch();
}