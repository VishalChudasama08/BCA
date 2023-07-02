/* write a c program to print following output
 1
 2  1
 3  2  1
 4  3  2  1
 5  4  3  2  1

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
   printf("%3d",j);
  }
  printf("\n");
 }
 getch();
}