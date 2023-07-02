#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i;
	clrscr();
	for(i=0;i<=4;i++)
	{
		printf("Enter Array %d Index Value :-",i);
		scanf("%d",&a[i]);
	}
	for(i=0;i<=4;i++)
	{
		printf("\nArray %d index Value and Value:- %d",i,a[i]);
	}
	getch();
}
