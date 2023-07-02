#include<stdio.h>
#include<string.h>
void main()
{
    char s1[]="JJKCC007";
    char s2[]="0123456789";
    int n;
    clrscr();
    n = strcspn(s1,s2);
    printf("The first decimal digit of s1 at position:-%d",n);
    getch();
}