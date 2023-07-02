#include<stdio.h>
#include<conio.h>
void main ()
{
    char name[3][30];
    int i,j,v=0,c=0;
    clrscr();
    for(i=0;i<=2;i++)
    {
        printf("Enter %d Student Name :",i);
        gets(name[i]);
    }
    for(i=0;i<=2;i++)
    {
        for(j=0;name[i][j]!='\0';j++)
        {
            if(name[i][j]=='a' ||name[i][j]=='A' || name[i][j]=='e' ||name[i][j]=='E' || name[i][j]=='i' ||name[i][j]=='I' || name[i][j]=='u' ||name[i][j]=='U' || name[i][j]=='o' || name[i][j]=='O')
                v++;
            else
                c++;
        }
    }
    printf("\n Vowel is %d",v);
    printf("\n Constant Is %d",c);
    getch();
}