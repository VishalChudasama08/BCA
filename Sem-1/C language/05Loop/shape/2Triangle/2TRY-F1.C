/*
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int i,j;
 clrscr();
 for(i=1;i<=5;i++)
 {
  for(j=1;j<=i;j++)
  {
   printf("%2d",j);
  }
  printf("\n");
 }
 for(i=4;i>=1;i--)
 {
  for(j=1;j<=i;j++)
  {
   printf("%2d",j);
  }
  printf("\n");
 }
 getch();
}