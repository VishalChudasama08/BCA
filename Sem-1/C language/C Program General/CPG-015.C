#include<stdio.h>
#include<conio.h>
void main()
{
 float bs,hra,da,pf,gt,net;
 clrscr();
 printf("Enter the basic Salary:- ");
 scanf("%f",&bs);

 da=bs*1.80;
 hra=bs*0.1;
 pf=bs*0.14;

 gt=bs+hra+da;
 net=gt-pf;
 printf("\nBASIC: %.2f",bs);
 printf("\nHRA: %.2f",hra);
 printf("\nDA: %.2f",da);
 printf("\nGross Total is %2.2f",gt);
 printf("\nNet salary is %2.2f",net);
 getch();
}