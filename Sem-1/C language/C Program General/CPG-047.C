#include<stdio.h>
#include<conio.h>
void main()
{
	int n,i=2,f=0;
	clrscr();
	printf("Enter No of Step: ");
	scanf("%d",&n);
	while(i<n)
	{
	    if(n%i==0)
	    {
		f=1;
		break;
	    }
	    i++;
	}
	if(f==0)
	    printf("\n Prime no=%d",n);
	else
	    printf("\n Not Prime numbe no=%d",n);
	getch();
}