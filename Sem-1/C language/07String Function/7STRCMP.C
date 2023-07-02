#include<stdio.h>
#include<string.h>
void main()
{
	char s1[]="jerry";
	char s2[]="jerrey";
	int i,j,k;
	clrscr();
	i=strcmp(s1,"jerry"); // s1 and jerry ni sarkhamni je sarkhaj chhe aetke 0
	j=strcmp(s1,s2); // s1 and s2 ni sarkhamani
	k=strcmp(s1,"jerry boy");
	printf("%d\n%d\n%d\n",i,j,k);
	getch();
}