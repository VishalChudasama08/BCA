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
    printf("UnSoterd String %s\n",name);
    for(i=0;name[i]!='\0';i++) 
    {
        for(j=i;name[j]!='\0';j++) 
        {
            if(name[i]>name[j]) 
            {
                ch=name[i];
                name[i]=name[j];
                name[j]=ch;
            }
        }
    }
    printf("SORTED STRING %s",name);
    getch();
}