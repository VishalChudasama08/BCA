#include<stdio.h>
#include<conio.h>
void main () 
{
    char name[5][30];
    int i;
    clrscr();
    for(i=0;i<=4;i++) 
    {
        printf("Enter %d Student Name :",i);
        gets(name[i]);
    }
    for(i=0;i<=4;i++) 
    {
        printf("\n%d Student Name is %s",i,name[i]);
    }
    getch();
}