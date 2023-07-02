#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main() 
{
    int i,len=0,j=0;
    char name[30],rev[30];
    clrscr();
    printf("Enter name : ");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
        len++;
    }
    for(i=len-1;i>=0;i--) 
    {
        rev[j]=name[i];
        j++;
    }
    rev[j]='\0';
    printf("\n Reverse String is %s",rev);
    getch();
}