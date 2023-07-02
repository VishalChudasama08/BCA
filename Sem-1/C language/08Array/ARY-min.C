/* to display minimum number */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,min;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter value in Array: ");
		scanf("%d",&a[i]);
	}
	for(i=0;i<=9;i++)
	{
		printf("\nArray value is %d",a[i]);
		if(i==0)
			min=a[i];
		if(min>a[i])
			min=a[i];
	}
	printf("\n\n Minimum value is %d",min);
	getch();
}