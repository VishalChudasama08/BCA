#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main()
{
    char name[25];
    int i;
    clrscr();
    printf("Enter Your Name :");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
	printf("\n%c",name[i]);
    }
    getch();
}