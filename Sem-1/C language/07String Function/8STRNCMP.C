#include<stdio.h>
#include<string.h>
void main()
{
    char s1[]="BCAPGDCA";
    char s2[]="BCABBA";
    clrscr();
    if(strncmp(s1,s2,3)==0) { // s1 and s2 na 3 chara. ni sarkhamani kare chhe ahi sem chhe aetle 0 thay chhe.
	printf("3 characters are same");
    }
    else {
	printf("3 character are not same");
    }
    getch();
}