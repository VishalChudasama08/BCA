#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void capital(char *);
void main()
{
	char name[25];
	clrscr();
	printf("Enter Your Name :");
	gets(name);
	capital(name);
	getch();
}
void capital(char *p)
{
	int i;
	while(*p!='\0')
	{
		if(*p >='a' && *p <= 'z')
			printf("%c",*p-32);
		else
			printf("%c",*p);
		p++;
	}
}
