/* Write a program which count on of characters, digit, space and special
   symbols in specified text file */
#include<stdio.h>
#include<conio.h>
void main() {
    FILE *fp;
    char ch,*str;
    int c=0,l=0,s=0,d=0,sp=0;
    clrscr();

    printf("\nEnter Full path of a Text File:- ");
    gets(str);
    fp=fopen(str,"r");

    if(fp==NULL){
	printf("Unable open a file");
	exit(0);
    }
    ch=fgetc(fp);
    while(ch!=EOF){
	if(ch=='\n')
	    l++;
	else if((ch>='A'&& ch<='Z')||(ch>='a'&&ch<='z'))
	    c++;
	else if(ch>='0'&&ch<='9')
	    d++;
	else if(ch==' ')
	    sp++;
	else
	    s++;
	ch=fgetc(fp);
    }
    printf("\n Total Characters are %d",c);
    printf("\n Total Digit are %d",d);
    printf("\n Total Space are %d",sp);
    printf("\n Total Line are %d",l);

    fclose(fp);
    getch();
}