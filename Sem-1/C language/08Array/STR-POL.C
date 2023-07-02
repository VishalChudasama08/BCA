/* to accept string value from user and check that string is polindrome or
not without using any string Function */
#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
	int i,len=0,j=0,f=0;
	char name[30],rev[30];
	clrscr();
	printf("Enter name:- ");
	gets(name);
	for(i=0;name[i]!='\0';i++)
	{
		len++;
	}
	for(i=len-1;i>=0;i--)
	{
		rev[i]=name[i];
		j++;
	}
	rev[j]='\0';
	for(i=0;name[i]!='\0';i++)
	{
		if(name[i]!=rev[i])
		{
			f=1;
			break;
		}
	}
	if(f==0)
		printf("String is Polindrom");
	else
		printf("String is Not Polindrom");
	getch();
}