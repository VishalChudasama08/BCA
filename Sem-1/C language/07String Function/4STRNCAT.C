#include<stdio.h>
#include<string.h>
void main()
{
     char s1[10]="JJKCC", s2[20]="BCA.BBA.BCom.";
     clrscr();
     printf("\n%s",s1);
     strncat(s1,s2,4); // s1 ma s2 na phela 4 characters aapo
     printf("\n%s",s1);
     printf("\n%s",s2);
     getch();
}