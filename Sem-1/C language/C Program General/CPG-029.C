#include<stdio.h>
#include<conio.h>
void main()
{
 int qty;
 float rate,amt,dis;
 clrscr();
 printf("Enter Quantity: ");
 scanf("%d",&qty);
 printf("Enter Rate: ");
 scanf("%f",&rate);

 amt=qty*rate;
 if(amt>=1001.00 && amt<=10000.00)
 dis=amt*0.50;

 else if(amt>10000.00 && amt<=15000.00)
 dis=amt*0.07;

 else if(amt>15000.00 && amt<=20000.00)
 dis=amt*0.09;

 else
 dis=amt*0.12;

 printf("\nAmout of Bill: %.2f",amt);
 printf("\nDiscount of Bill: %.2f",dis);
 printf("\nPayable of Bill: %.2f",amt-dis);
 getch();
}