#include<stdio.h>
#include<conio.h>
void main()
{
 float area,r,h;
 const float PI=3.14;
 clrscr();

 printf("Enter Radios: ");
 scanf("%f",&r);
 area=(PI*r*2);
 printf("perimeter of circle %f",area);
 getch();
}
