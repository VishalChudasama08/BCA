/*
1
2 1
3 2 1
4 3 2 1
5 4 3 2 1
4 3 2 1
3 2 1
2 1
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
  for(j=i;j>=1;j--)
  {
     printf("%2d",j);
  }
  printf("\n");
 }
 for(i=4;i>=1;i--)
 {
  for(j=i;j>=1;j--)
  {
     printf("%2d",j);
  }
  printf("\n");
 }
 getch();
}