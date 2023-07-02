#include<stdio.h>
#include<conio.h>
void main()
{
 float volumn,r,h;
 const float PI=3.14;
 clrscr();

 printf("Enter Radios: ");
 scanf("%f",&r);
 printf("Enter Height: ");
 scanf("%f",&h);
 volumn=(PI*r*r*h)/3;
 printf("Volume of cone %f",volumn);
 getch();
}
