/* write a c program to display first 20 even number (using for loop */

#include<stdio.h>
#include<conio.h>
void main()
{
 int a;
 clrscr();

 for(a=1;a<=40;a++)
 {
  if(a%2==0)      // odd mate if(a%2==1)
	printf("\n%2d",a);
 }
 getch();
}