/* write a program to calculate and print volume of cone. (v=1/3*pi*r*r*h) */
#include<stdio.h>
#include<conio.h>
main()
{
 float v,r,h;
 clrscr();

 printf("Enter value of r: ");
 scanf("%f",&r);

 printf("Enter value of h: ");
 scanf("%f",&h);

 v= 0.333333 * 3.14 * r * r * h; // 1/3 = 0.333333

 printf("That number is %f",v);
 getch();
}
