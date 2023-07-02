#include<stdio.h>
#include<string.h>
void main()
{
    char s1[]="BCAPGDCA";
    char s2[]="BCABBA";
    int n;
    clrscr();
    n = strspn(s1,s2);
    printf("The number length is :-%d",n);
    getch();
}