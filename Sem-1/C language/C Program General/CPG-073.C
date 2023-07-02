#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Value IN ARRAY : ");
		scanf("%d",&a[i]);
	}
	for(i=9;i>=0;i--)
	{
		printf("\nArray Value Is :%d",a[i]);
	}
	getch();
}
