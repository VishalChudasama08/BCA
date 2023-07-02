#include<stdio.h>
#include<conio.h>
void main()
{
 int n,a=0;
 clrscr();
 printf("Enter Number of step value: ");
 scanf("%d",&n);
 while(a<=255)
 {
  printf("\nKey ASCII %d and Character %c",a,a);
  a++;
 }
 getch();
}