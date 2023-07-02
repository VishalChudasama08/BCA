#include<stdio.h>
#include<conio.h>
void main()
{
	int n=2,i,f=0;
	clrscr();
	while(n<=500)
	{
	    f=0;
	    i=2;
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
	       printf("\nPrime no=%d",n);
	       n++;
	}
	getch();
}