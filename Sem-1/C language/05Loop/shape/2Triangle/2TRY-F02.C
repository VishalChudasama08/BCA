/*
1 2 3 4 5 4 3 2 1
  1 2 3 4 3 2 1
    1 2 3 2 1
      1 2 1
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
     printf("  ");
  }
  sp++;
  for(j=1;j<=i;j++)
  {
     printf("%2d",j);
  }
  for(i=4;i>=1;i--)
  {
    for(j=i;j>=1;j--)
    {
       printf("%2d",j);
    }
  }
  printf("\n");
 }
 getch();
}