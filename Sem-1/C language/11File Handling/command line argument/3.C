// write a command line argument code for check number is Armstrong

of not

#include<stdio.h>

#include<conio.h>

void main(int argc, char *argv[])

{

int n,i,ex,a,sum=0;

clrscr();

if(argc > 2)

{

printf("only one argument");

exit(0);

}

printf("Number is %s",argv[1]);

n = atoi(argv[1]);
ex=n;

while(n!=0)

{

a=n%10;

sum+=a*a*a;

n=n/10;

}

if(ex==sum)

printf("\nNumber is Armstrong");

else

printf("\n Number is not Armstrong");

getch();

}