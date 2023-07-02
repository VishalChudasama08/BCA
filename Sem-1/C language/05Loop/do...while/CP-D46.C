/* write a c program to display first 20 even number in using do.... while loop */

#include<stdio.h>
#include<conio.h>
void main()
{
 int a=1;
 clrscr();

 do
 {
  if(a%2==0)      // odd mate if(a%2d==1)
	printf("\n%2d",a);
  a++;
 }while(a<=40);
 getch();
}