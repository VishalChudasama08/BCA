#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,count=0;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter Array %d Index Value :-",i);
		scanf("%d",&a[i]);
	}
	for(i=0;i<=9;i++)
	{
		if(a[i]>50)
		count++;
	}
	printf("\n %d numbers is Greater than 50",count);
	getch();
}
