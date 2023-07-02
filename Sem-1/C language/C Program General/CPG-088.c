#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main()
{
    char name[10];
    int i;
    clrscr();
    printf("Enter Name :");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
        printf("\n Character %c and ASCII code %d ",name[i],name[i]);
    }
    getch();
}