/*
	1
      1 2
    1 2 3
  1 2 3 4
1 2 3 4 5
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int i,j,k,sp=4;
 clrscr();
 for(i=1;i<=5;i++)
 {
  for(k=1;k<=sp;k++)
  {
     printf("  ");
  }
  sp--;
  for(j=1;j<=i;j++)
  {
     printf("%2d",j);
  }
  printf("\n");
 }
 getch();
}
