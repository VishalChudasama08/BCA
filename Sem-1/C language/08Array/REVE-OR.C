/* write a c program to display reverce order */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter value in Array %d: ",i);
		scanf("%d",&a[i]);
	}
	for(i=9;i>=0;i--)
	{
		printf("\nArray value is: %d",a[i]);
	}
	getch();
}