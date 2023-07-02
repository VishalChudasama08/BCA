#include<stdio.h>
#include<conio.h>
void main()
{
 int p,r,n,i;
 clrscr();
 printf("Enter P:- ");
 scanf("%d",&p);
 printf("Enter R:- ");
 scanf("%d",&r);
 printf("Entere N:- ");
 scanf("%d",&n);

 i=(p/100)*r*n;
 printf("value of i is:- %d",i);
 getch();
}