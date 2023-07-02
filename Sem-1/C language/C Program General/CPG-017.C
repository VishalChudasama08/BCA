#include<stdio.h>
#include<conio.h>
void main()
{
 int srno,m1,m2,m3,m4,m5,total;
 float per;
 clrscr();
 printf("Enter srno: ");
 scanf("%d",&srno);
 printf("Enter subject 1 Marks: ");
 scanf("%d",&m1);
 printf("Enter subject 2 Marks: ");
 scanf("%d",&m2);
 printf("Enter subject 3 Marks: ");
 scanf("%d",&m3);
 printf("Enter subject 4 Marks: ");
 scanf("%d",&m4);
 printf("Enter subject 5 Marks: ");
 scanf("%d",&m5);

 total=m1+m2+m3+m4+m5;
 per=total/5;

 printf("\ntotal marks: %d",total);
 printf("\npercentage: %.2f",per);
 getch();
}