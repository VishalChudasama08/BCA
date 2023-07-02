/* write a c program to print following output
1 2 3 4 5
1 2 3 4 5
1 2 3 4 5
1 2 3 4 5
1 2 3 4 5
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int i,j;
 clrscr();
 for(i=1;i<=5;i++)
 {
  for(j=1;j<=5;j++)
  {
   printf("%2d",j);
  }
  printf("\n");
 }
 getch();
}