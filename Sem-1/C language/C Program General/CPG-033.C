#include<stdio.h>
#include<conio.h>
void main()
{
 char a;
 clrscr();
 printf("Enter Character from user: ");
 a=getchar();

 switch(a)
 {
  case 'A':
  case 'E':
  case 'I':
  case 'O':
  case 'U':
  case 'a':
  case 'e':
  case 'i':
  case 'o':
  case 'u':
	printf("\nvowel character");
	break;
  default:
	printf("\nNot vowel character");
 }
 getch();
}