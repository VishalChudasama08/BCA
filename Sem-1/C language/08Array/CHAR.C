//to accept name from user and display it
// string single dimension array
#include<stdio.h>
#include<conio.h>
void main()
{
	char name[25];
	clrscr();
	printf("Enter Your name: ");
	//scanf("%s",name);
	gets(name);

	//printf("Your name is %s",name);
	puts(name);
	getch();
}