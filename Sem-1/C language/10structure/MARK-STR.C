/* wap to create a student structure like rno,mark1,mark2,mark3,mark4,total,
   pre,grade and reult and prepaired markcheet with validation */

#include<stdio.h>
#include<conio.h>
// create student strucrure
struct student
{
   int rno,m1,m2,m3,m4,total;
   float per;
}s1;
//strecture variable s1
void main()
{
   clrscr();
   printf("Enter Roll no:- ");
   scanf("%d",&s1.rno);
   printf("\nEnter Mark1:- ");
   scanf("%d",&s1.m1);
   printf("Enter Mark2:- ");
   scanf("%d",&s1.m2);
   printf("Enter Mark3:- ");
   scanf("%d",&s1.m3);
   printf("Enter Mark4:- ");
   scanf("%d",&s1.m4);

   s1.total=s1.m1+s1.m2+s1.m3+s1.m4;
   s1.per=s1.total/4;

   printf("\nRoll no is:- %d\n",s1.rno);
   printf("\nMark1 is :- %d",s1.m1);
   printf("\nMark2 is :- %d",s1.m2);
   printf("\nMark3 is :- %d",s1.m3);
   printf("\nMark4 is :- %d\n",s1.m4);
   printf("\nTital is :- %d",s1.total);
   printf("\nPercentage is :- %.2f",s1.per);
   getch();
}