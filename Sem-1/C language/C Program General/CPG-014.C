#include<stdio.h>
#include<conio.h>
void main()
{
 float f,c;
 clrscr();
 printf("Enter Celsius Value: ");
 scanf("%f",&c);
 f=(c*1.8)+32.0;
 printf("Celsius to Fahrenheit: %f",f);
 getch();
}