/* write a c program to read a number from the user and display taht month
   name using switch.....case
   f.e.
   if user enter 1 then print jan.
   if user enter 2 then print feb. and so on
   if user enter value less then 1 or more then 12 then print plz input between
   1 to 12
*/
#include<stdio.h>
#include<conio.h>
void main()
{
 int a;
 clrscr();

 printf("Enter Month number: ");
 scanf("%d",&a);

 switch(a)
 {
  case 1:
	printf("Jan");
	break;
  case 2:
	printf("Feb");
	break;
  case 3:
	printf("Mar");
	break;
  case 4:
	printf("Apr");
	break;
  case 5:
	printf("May");
	break;
  case 6:
	printf("Jun");
	break;
  case 7:
	printf("Jul");
	break;
  case 8:
	printf("Aug");
	break;
  case 9:
	printf("Sep");
	break;
  case 10:
	printf("Oct");
	break;
  case 11:
	printf("Nov");
	break;
  case 12:
	printf("dec");
	break;
  default:
	printf("plz input between 1 to 12");
 }
 getch();
}