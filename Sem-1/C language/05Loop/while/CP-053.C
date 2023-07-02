/* write a c porgram to print sum of 1 to 10 (using while loop)*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int i=1,sum=0;
 clrscr();

 while(i<=10)
 {
  sum=sum+i;
  i++;
 }
 printf("\nsum is %d",sum);
 getch();
}