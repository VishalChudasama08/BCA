/* write a c program to print following output
1 2 3 4 5
2 3 4 5 6
3 4 5 6 7
4 5 6 7 8
5 6 7 8 9
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int i,j,k;
 clrscr();
 for(i=1;i<=5;i++)
 {
  k=i;
  for(j=1;j<=5;j++)
  {
   printf("%2d",k++);
  }
  printf("\n");
 }
 getch();
}