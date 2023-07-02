/* write a c program to accept grno and four subject internal or theory marks from user, prepare
   marksheet with proper validation and display grno, internal and theory marks and also total,
   percentage, grade, result
   (1) Internal marks between 0 to 30 and minimum 12
   (2) Theory marks between 0 to 70 and minimum 28
   (Using structure)
*/
#include<stdio.h>
#include<conio.h>
struct student
{
   int grno,im1,im2,im3,im4,tm1,tm2,tm3,tm4,total;
   float per;
}s1;
void main()
{
   clrscr();

   printf(" Internal Marks\n");
   printf("Enter Subject 1 marks: ");
   scanf("%d",&s1.im1);
   printf("Enter Subject 2 marks: ");
   scanf("%d",&s1.im2);
   printf("Enter Subject 3 marks: ");
   scanf("%d",&s1.im3);
   printf("Enter Subject 4 marks: ");
   scanf("%d",&s1.im4);

   printf("\n Theory Marks\n");
   printf("Enter Subject 1 marks: ");
   scanf("%d",&s1.tm1);
   printf("Enter Subject 2 marks: ");
   scanf("%d",&s1.tm2);
   printf("Enter Subject 3 marks: ");
   scanf("%d",&s1.tm3);
   printf("Enter Subject 4 marks: ");
   scanf("%d",&s1.tm4);

   if(! ((s1.im1>=0 && s1.im1<=30) && (s1.im2>=0 && s1.im2<=30) && (s1.im3>=0 && s1.im3<=30) && (s1.im4>=0 && s1.im4<=30)))
   {
       printf("plz enter internel marks between 0 to 30");
   }

   else if(! ((s1.tm1>=0 && s1.tm1<=70) && (s1.tm2>=0 && s1.tm2<=70) && (s1.tm3>=0 && s1.tm3<=70) && (s1.tm4>=0 && s1.tm4<=70)))
   {
       printf("plz enter theory marks between 0 to 70");
   }

   else
   {
       if(s1.im1>=12 && s1.im2>=12 && s1.im3>=12 && s1.im4>=12 && s1.tm1>=28 && s1.tm2>=28 && s1.tm3>=28 && s1.tm4>=28)
       {
	   s1.total = s1.im1 + s1.im2 + s1.im3 + s1.im4 + s1.tm1 + s1.tm2 + s1.tm3 + s1.tm4;
	   s1.per = s1.total/4;
	   printf("\nTotal     : %d",s1.total);
	   printf("\nPercentage: %.2f",s1.per);
	   printf("\nResult    : PASS");
	   if(s1.per>=90)
	       printf("\nGrade     : A+");
	   else if(s1.per>=80)
	       printf("\nGrade     : A");
	   else if(s1.per>=70)
	       printf("\nGrade     : B");
	   else if(s1.per>=60)
	       printf("\nGrade     : C");
	   else if(s1.per>=50)
	       printf("\nGrade     : D");
	   else
	       printf("\nGrade     : E");
       }
       else
       {
	   s1.total = s1.im1 + s1.im2 + s1.im3 + s1.im4 + s1.tm1 + s1.tm2 + s1.tm3 + s1.tm4;
	   printf("\nTotal     : %d", s1.total);
	   printf("\nPercentage: ******");
	   printf("\nResult    : FALL");
	   printf("\nGrade     : F");
       }
    }
    getch();
}