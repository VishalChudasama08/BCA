/* write a c program which count no of characters, digit, space and special
   symbols in specified text file using Library funcion */
#include<stdio.h>
#include<conio.h>
void main(){
    FILE *fp;
    char ch,*str;
    int c=0,l=0,d=0,s=0,sp=0;
    clrscr();

    printf("\nEnter Full path of text file:- ");
    gets(str);
    fp=fopen(str,"r");

    if(fp==NULL){
	printf("Unable to open file");
	exit(0);
    }
    ch=fgetc(fp);
    while(ch!=EOF){
	if(iscntrl(ch))
	    l++;
	else if(isalpha(ch))
	    c++;
	else if(isdigit(ch))
	    d++;
	else if(ch==' ')
	    sp++;
	else
	    s++;
	ch=fgetc(fp);
    }
    printf("\n Total Characters are %d",c);
    printf("\n Total Digit are %d",d);
    printf("\n Total space are %d",sp);
    printf("\n Total Symbol are %d",s);
    printf("\n Total Line are %d",l);

    fclose(fp);
    getch();
}