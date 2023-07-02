#include<stdio.h>
#include<conio.h>
void main()
{
 char a;
 clrscr();
 printf("Enter upper character: ");
 a=getchar();
 if(a>='A'&&a<='Z')
 {
    printf("%c",a+32);
 }
 getch();
}