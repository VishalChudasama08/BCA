#include<stdio.h>
#include<conio.h>
void main()
{
 float b,h,area;
 clrscr();
 printf("Enter Base: ");
 scanf("%f",&b);
 printf("Enter Height: ");
 scanf("%f",&h);
 area=(b*h)/2;
 printf("Area of Triangle is %f",area);
 getch();
}