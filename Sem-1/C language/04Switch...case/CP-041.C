/* write a c program to read a number from the user and display that number
   from the user display that number usin SWITCH....... CASE
   f.e.
   if user enter 1 than print one,
   if user enter 2 than print two and so on
   if user enter value less than 1 or more than 5 than print plz input between
   1 to 5
*/

#include<stdio.h>
#include<conio.h>
main()
{
 int a;
 clrscr();

 printf("Enter number: ");
 scanf("%d",&a);

 switch(a)
 {
  case 1:
	printf("one");
	break;
  case 2:
	printf("two");
	break;
  case 3:
	printf("three");
	break;
  case 4:
	printf("four");
	break;
  case 5:
	printf("five");
	break;
  default:
	printf("plz input between 1 to 5");
  }
  printf("\nend");
  getch();
}

