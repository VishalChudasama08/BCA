/*
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
 int i,j,k,sp=0;
 clrscr();
 for(i=5;i>=1;i--)
 {
  for(k=1;k<=sp;k++)
  {
     printf("  ");   // 2 space
  }
  sp++;
  for(j=i;j>=1;j--)
  {
     printf("%2d",j);
  }
  printf("\n");
 }
 getch();
}
