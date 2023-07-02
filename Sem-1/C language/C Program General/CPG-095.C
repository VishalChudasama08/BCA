#include<stdio.h>
#include<conio.h>
#include<math.h>
void main()
{
    double b,r,a;
    clrscr();
    printf("Enter Base value: ");
    scanf("%lf",&b);
    printf("\nEnter Rest value: ");
    scanf("%lf",&r);
    a=pow(b,r);
    printf(" \n Base %.lf^%.lf rest = %.lf",b,r,a);
    getch();
}