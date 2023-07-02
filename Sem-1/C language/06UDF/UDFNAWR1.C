/* write a c program to read the number from the user an d dispaly addition
of two number using the UDF title No Arrgument With Retrun */
#include<stdio.h>
#include<conio.h>
int add();
int a,b;
void main()
{
  int c;
  clrscr();
  c=add();
  printf("\n %d + %d = %d",a,b,c);
  getch();
}
 int add()
{
  printf("Enter value 1:");
  scanf("%d",&a);
  printf("Enter value 2:");
  scanf("%d",&b);
  return(a+b);
}
