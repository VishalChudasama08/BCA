// write a command line program to display all value which is give by

user

#include<stdio.h>

#include<conio.h>

void main(int argc, char *argv[])

{

int i;

clrscr();

for(i=0;i<argc;i++)

{

printf("\nValue of i = %d - ",i);

puts(argv[i]);

}

getch();

}