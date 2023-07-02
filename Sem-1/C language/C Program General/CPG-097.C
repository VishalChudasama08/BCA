#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
    char st[30],cp[30];
    int len;
    clrscr();
    printf("Enter String Value ");
    gets(st);
    strcpy(cp,st);
    printf(" String is %s",cp);
    getch();
}