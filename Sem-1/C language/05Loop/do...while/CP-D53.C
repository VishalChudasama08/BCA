/* write a c porgram to print sum of 1 to 10 (using do.... while loop)*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int i=1,sum=0;
 clrscr();

 do
 {
  sum=sum+i;
  i++;
 }while(i<=10);
 printf("\nsum is %d",sum);
 getch();
}