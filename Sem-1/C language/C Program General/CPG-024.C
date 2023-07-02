#include<stdio.h>
#include<conio.h>
void main()
{
 char a;
 clrscr();
 printf("Enter character from user: ");
 a=getchar();
 if(a=='a'||a=='A'||a=='e'||a=='E'||a=='i'||a=='I'||a=='o'||a=='O'||a=='u'||a=='U')
 {
     printf("\nvowel character");
 }
 else
 {
     printf("\nnot vowel character");
 }
 getch();
}