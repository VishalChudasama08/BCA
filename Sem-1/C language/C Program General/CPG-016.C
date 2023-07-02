#include<stdio.h>
#include<conio.h>
void main()
{
 float km,me,feet,inch,cen;
 clrscr();
 printf("Enter the KiloMeter:- ");
 scanf("%f",&km);

   me=km*1000.00;
 feet=km*3280.83;
 inch=km*39370.00;
 cen=km*100000.00;

 printf("\nKilometer: %.2f",km);
 printf("\nmeter: %.2f",me);
 printf("\nfeet: %.2f",feet);
 printf("\ninches: %.2f",inch);
 printf("\ncentimeter: %.2f",cen);
 getch();
}