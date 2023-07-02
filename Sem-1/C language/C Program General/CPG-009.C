#include<stdio.h>
#include<conio.h>
#define PI 3.14
void main()
{
 float r,volumn;
 clrscr();
 printf("Enter Radios: ");
 scanf("%f",&r);

 volumn=(PI*r)*(4/3);

 printf("\nThe volumn is %f",volumn);
 getch();
}
