#include<stdio.h>
#include<conio.h>
void main()
{
    char name[30];
    int i,count=0,v=0,c=0;
    clrscr();
    printf("Enter Name -: ");
    gets(name);
    for(i=0;name[i]!='\0';i++) 
    {
        count++;
	if(name[i]=='a'||name[i]=='A'||name[i]=='e'||name[i]=='E'||name[i]=='i'||name[i]=='I'||name[i]=='o'||name[i]=='O'||name[i]=='u'||name[i]=='U')
            v++;
        else
            c++;
    }
    printf("\n Vowel Character : %d",v);
    printf("\n Constant Character : %d",c);
    printf("\n Total Character : %d",count);
    getch();
}