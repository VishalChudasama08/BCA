#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main()
{
    int i,len=0,j=0;
    char name[30],rev[30];
    clrscr();
    printf(" Enter name : ");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
        len++;
    }
    for(i=len-1;i>=0;i--,j++)
    {
	rev[j]=name[i];
    }
    rev[j]='\0';
    for(i=0;rev[i]!='\0';i++) 
    {
	if(name[i]>='A' && name[i]<='Z')
	    printf("%c",name[i]+32);
	else(name[i]>='a' && name[i]<='a')
	    printf("%c",name[i]-32);
    }
    getch();
}