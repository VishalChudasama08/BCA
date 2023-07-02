#include<stdlib.h>
#include<stdio.h>
#include<conio.h>
void main() 
{
    char name[30],ch;
    int i,j;
    clrscr();
    printf("Enter Name :");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
        for(j=i;name[j]!='\0';j++) 
        {
            printf("%2c",name[j]);
        }
        for(j=0;j<i;j++) 
        {
            printf("%2c",name[j]);
        }
        printf("\n");
    }
    getch();
}