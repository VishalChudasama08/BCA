// copy data file1 to file2 using command line 

#include<stdio.h>

#include<conio.h>

void main(int arc, char *arv[] )

{

FILE *fp1, *fp2;

char ch;

clrscr();

if(arc==3)

{

fp1=fopen(arv[1],"r");

fp2=fopen(arv[2],"w");

if(fp1==NULL)

{

printf("\n UNABLE OPEN a FILE1 ");

exit(0);

}

else if(fp2==NULL)

{

printf("\n UNABLE OPEN a FILE2 ");

exit(0);

}

else

{

ch=fgetc(fp1);

while(ch!=EOF)

{

fputc(ch,fp2);

ch=fgetc(fp1);

}

}

fclose(fp1);

fclose(fp2);

}

else

{
    printf("Invalid Arg");

}

getch();

}