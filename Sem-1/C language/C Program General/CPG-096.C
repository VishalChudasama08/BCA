#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
    char st[30];
    int len;
    clrscr();
    printf("Enter String Value: ");
    gets(st);
    printf(" The Length Of String is %d",strlen(st));
    getch();
}