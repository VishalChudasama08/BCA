/* write a program to display HELLO WORLD */

#include<stdio.h>
#include<conio.h>

void main()
{
 int a=97,z=122,A=65,Z=90,_1=49,_9=57;
 clrscr();
 printf("ASCII code is:-\t%c=49 to %c=57\n\t\t%c=65 to %c=90\n\t\t%c=97 to %c=122",_1,_9,A,Z,a,z);
 vishal();
 getch();
}
int vishal()
{
  char a;
  a=96+1;
  printf("\n\n\t97=%d",a);
  return 0;
}