/* write a program to calculate and print volume of sphere.(v=4/3*pi*r*r) */

#include<stdio.h>
#include<conio.h>
#include<math.h>

main()
{
 float r,v,x;
 clrscr();

 printf("Enter value of r: ");
 scanf("%f",&r);

 v=1.333333*3.14*r*r; // 4/3 = 1.333333

 printf("\n v is %f",v);
 getch();
}
