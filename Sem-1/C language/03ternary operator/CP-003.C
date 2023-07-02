/* write a program to accept two(2) integer values from user and display all opration of arithmetic oprator */

#include<stdio.h>
#include<conio.h>

main()
{
 int a,b,c;
 clrscr();

 printf("Enter value 1 :");
 scanf("%d",&a);

 printf("Enter value 2 :");
 scanf("%d",&b);

 c=a+b;
 printf("\n %d + %d = %d",a,b,c); //,a,b,c is s1=1%d=a,s2=2%d=b,'c=a+b'=3%d=c

 c=a-b;
 printf("\n %d - %d = %d",a,b,c);

 c=a*b;
 printf("\n %d * %d = %d",a,b,c);

 c=a/b;
 printf("\n %d / %d = %d",a,b,c);

 c=a%b;
 printf("\n %d %% %d = %d",a,b,c);
 getch();

}