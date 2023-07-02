#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,max;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Value IN ARRAY : ");
		scanf("%d",&a[i]);
	}
	for(i=0;i<=9;i++)
	{
		printf("\nArray Value Is :%d",a[i]);
		if(i==0)
		max=a[i];
		if(max<a[i])
		max=a[i];
	}
	printf("\nMaximum Value is %d",max);
	getch();
}
