#include<stdio.h>
#include<conio.h>
void main()
{
 char a;
 clrscr();
 printf("enter chareter: ");
 a=getchar();
 if(a>='0' && a<='9')
     printf("\nDigit");
 else if(a>='a' && a<='z')
     printf("\nLower case");
 else if(a>='A' && a<='Z')
     printf("\nupper case");
 else
     printf("\nsymbol");
 getch();
}