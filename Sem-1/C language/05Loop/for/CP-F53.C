/* write a c porgram to print sum of 1 to 10 (using for loop)*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int i,sum=0;
 clrscr();

 for(i=1;i<=10;i++)
 {
  sum=sum+i;
 }
 printf("\nsum is %d",sum);
 getch();
}