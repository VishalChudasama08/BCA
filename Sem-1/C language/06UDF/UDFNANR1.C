/* write a c program to read the number from the user an d dispaly addition
of two number using the UDF title No Arrgument No Retrun */
#include<stdio.h>
#include<conio.h>
void add();
void main()
{
  clrscr();
  add();
  getch();
}
 void add()
{
  int a,b,c;
  printf("Enter value 1:");
  scanf("%d",&a);
  printf("Enter value 2:");
  scanf("%d",&b);
  c=a+b;
  printf("\n %d + %d = %d", a,b,c);
}
