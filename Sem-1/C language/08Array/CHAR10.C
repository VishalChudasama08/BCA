// to accept 10 character value from user and display it
#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main()
{
	char name[10];
	int i;
	clrscr();
	for(i=0;i<10;i++)
	{
		printf("enter %d charcter: ",i);
		fflush(stdin);
		name[i]=getchar();
	}
	for(i=0;i<10;i++)
	{
		printf("\n%c",name[i]);
	}
	printf("\n ");
	puts(name);
	getch();
}