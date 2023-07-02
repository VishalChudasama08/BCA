// w a c p in input array number and display even and odd sum
#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n[10],osum,esum,d,ex;
	clrscr();
	for(i=0;i<=9;i++)
	{
		printf("Enter %d number: ",i);
		scanf("%d",&n[i]);
	}
	for(i=0;i<=9;i++)
	{
		esum=0;
		osum=0;
		ex=n[i];
		while(ex!=0)
		{
			d=ex%10;

			if(d%2==0)
				esum+=d;
			else
				osum+=d;

			ex=ex/10;
		}
		printf("\nNumber is %3d Even sum: %3d Odd sum: %3d",n[i],esum,osum);
	}
	getch();
}