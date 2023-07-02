/* write a c program to read a number from the user and display taht week-day
   name using switch.....case
   f.e.
   if user enter 1 then print sunday
   if user enter 2 then print monday and so on
   if user enter value less then 1 or more then 7 then print plz input between
   1 to 7
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int a;
 clrscr();

 printf("Enter Day number: ");
 scanf("%d",&a);

 switch(a)
 {
  case 1:
	printf("sun");
	break;
  case 2:
	printf("mon");
	break;
  case 3:
	printf("tue");
	break;
  case 4:
	printf("wed");
	break;
  case 5:
	printf("thu");
	break;
  case 6:
	printf("fri");
	break;
  case 7:
	printf("sat");
	break;
  default:
	printf("plz input between 1 to 7");
 }
 getch();
}