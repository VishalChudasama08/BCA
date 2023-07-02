/* write a programto read principal amount rate of intrest and year to count
simple intrest and compound intrest and disply it */

#include<stdio.h>
#include<conio.h>
#include<math.h>
main()
{
 float p,n,r,si,ci;
 clrscr();

 printf("Enter principal amount : ");
 scanf("%f",&p);

 printf("Enter rate: ");
 scanf("%f",&r);

 printf("Enter the year: ");
 scanf("%f",&n);

 si=(p*r*n)/100;
 ci=p*(pow((1+(r/100)),n));

 printf("\nsimple intrest=%f",si);
 printf("\ncompound intrest=%f",ci-p);
 getch();
}