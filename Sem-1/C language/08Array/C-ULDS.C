/* to accept name from user and cont How many characters are Uppercase,
Lowercase,digit and Special Symbols */
#include<stdio.h>
#include<conio.h>
void main()
{
	char name[30];
	int i,u=0,l=0,d=0,s=0;
	clrscr();
	printf("Enter Name:- ");
	gets(name);
	for(i=0;name[i]!='\0';i++)
	{
		if(name[i]>='A' && name[i]<='Z')
			u++;
		else if(name[i]>='a' && name[i]<='z')
			l++;
		else if(name[i]>='0' && name[i]<='9')
			d++;
		else
			s++;
	}
	printf("\n Upper case: %d",u);
	printf("\n Lower case: %d",l);
	printf("\n     Digit : %d",d);
	printf("\n     Symbol: %d",s);
	getch();
}