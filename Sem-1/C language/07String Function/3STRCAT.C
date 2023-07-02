#include<stdio.h>
#include<string.h>
void main()
{
	char str[80];
	clrscr();
	strcpy (str,"These ");
	strcat (str,"strings ");
	strcat (str,"are ");
	strcat (str,"concatenated.");
	puts (str);
	getch();

}