/* write a c program to accept 10 values in array and display it */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index value: ",i);
		scanf("%d",&a[i]);
	}
	for(i=0;i<=9;i++)
	{
		printf("\nArray %d index value %u memory location and value:- %d",i,&a[i],a[i]);
	}
	getch();
}