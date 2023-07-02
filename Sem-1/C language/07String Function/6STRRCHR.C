#include<stdio.h>
void main()
{
	char str1[]="computer program";
	char v;
	v= strrchr (str1,'o');
	clrscr();
	printf("The last occurrence :- %s",v);
	getch();
}