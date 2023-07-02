#include<stdio.h>
#include<conio.h>
void main()
{
 int year;
 clrscr();
 printf("Enter value: ");
 scanf("%d",&year);
 if(year%4==0)
 {
  printf("Leap year");
 }
 if(year%4!=0)
 {
  printf("\nnot Leap year");
 }
 getch();
}