#include<stdio.h>
#include<conio.h>
void main()
{
 int cno;
 float rs,unit;
 clrscr();
 printf("Enter Customber Number: ");
 scanf("%d",&cno);
 printf("Enter the unit: ");
 scanf("%f",&unit);

 if(unit>=0 && unit<=200)
 rs=unit*0.50;
 else if(unit>=201 && unit<=400)
 rs=100.00 + (unit-200) * 0.65;
 else if(unit>=401 && unit<=600)
 rs=230.00 + (unit-240) * 0.80;
 else
 rs=390.00 + (unit-600) * 1.00;

 printf("\nThe Customber Number: %d",cno);
 printf("\nThe elictricity bill is: %.2f", rs);
 getch();
}