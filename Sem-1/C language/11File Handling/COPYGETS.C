#include<stdio.h>
#include<conio.h>
void main() {
    FILE *fp1, *fp2;
    char *path1, *path2, *ch, str[80];
    clrscr();

    printf("\nEnter Full path of a Source Text File:- ");
    gets(path1);
    printf("\nEnter Full path of a destination Text File :- ");
    gets(path2);

    fp1=fopen(path1,"r");
    fp2=fopen(path2,"w");

    if(fp1==NULL){
	printf("\nUnable Open path 1 File");
	exit(0);
    }
    if(fp2==NULL){
	printf("\nUnable Open path 2 File");
	exit(0);
    }
    else {
	ch=fgets(str,80,fp1);
	while(ch!=NULL){
	    fputs(ch,fp2);
	    ch=fgets(str,80,fp1);
	}
    }
    fclose(fp1);
    fclose(fp2);
    getch();
}