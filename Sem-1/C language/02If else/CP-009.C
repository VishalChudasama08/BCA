/* prepare a pay slip.
Employee Code, Basic Salary
calculate as below:
DA is 180% of basic, HRA is 10% of basic, PF is 14% of basic.
Gross Total = DA + HRA + bassic.
Net Salary = Gross Salary - PF. */

#include<stdio.h>
#include<conio.h>
#include<math.h>

int main()
{
 float bs, ec, hra, da, gt, gs, pf, ns;
 clrscr();

 printf("Enter basic salary: ");
 scanf("%f",&bs);
 printf("Enter employee code: ");
 scanf("%f",&ec);

 hra=bs*(10.00/100.00);
 da=bs*(180.00/100.00);
 pf=bs*(14.00/100.00);

 gs = da + hra + bs;
 printf("\nthe gross total is %f",gt);

 ns = gs - pf;
 printf("\nthe net salary is %f",ns);
 getch();
}