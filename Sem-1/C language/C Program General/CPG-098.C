#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
    char st1[30],st2[30];
    int len;
    clrscr();
    printf("Enter 1st String Value ");
    gets(st1);
    printf("Enter 2nd String Value ");
    gets(st2);
    if(strcmp(st1,st2)==0)
        printf("BOTH STRINGS ARE EQUAL");
    else
        printf("BOTH STRINGS ARE NOT EQUAL");
    getch();
}