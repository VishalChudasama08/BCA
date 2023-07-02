#include<stdio.h>
#include<conio.h>
void main()
{
 float f,c;
 clrscr();
 printf("Enter Fahrenheit Value: ");
 scanf("%f",&f);
 c=(f-32.0)/1.8;
 printf("Fahrenheit to Celsius: %f",c);
 getch();
}