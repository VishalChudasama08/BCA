/* to display maximum number */
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10],i,max;
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
			max=a[i];
		if(max<a[i])
			max=a[i];
	}
	printf("\n\n Maximum value is %d",max);
	getch();
}