/* write a c program to print following output
 1
 1  2
 1  2  3
 1  2  3  4
 1  2  3  4  5

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
   printf("%3d",j);
  }
  printf("\n");
 }
 getch();
}