#include<stdio.h>
#include<conio.h>
void main()
{
 int grno,im1,im2,im3,im4,tm1,tm2,tm3,tm4,total;
 float per;
 clrscr();

 printf("Enter grno: ");
 scanf("%d",&grno);
 printf("\nInternal Marks\n");
 printf("Enter Subject 1 marks: ");
 scanf("%d",&im1);
 printf("Enter Subject 2 marks: ");
 scanf("%d",&im2);
 printf("Enter Subject 3 marks: ");
 scanf("%d",&im3);
 printf("Enter Subject 4 marks: ");
 scanf("%d",&im4);

 printf("\n Theory Marks\n");
 printf("Enter Subject 1 marks: ");
 scanf("%d",&tm1);
 printf("Enter Subject 2 marks: ");
 scanf("%d",&tm2);
 printf("Enter Subject 3 marks: ");
 scanf("%d",&tm3);
 printf("Enter Subject 4 marks: ");
 scanf("%d",&tm4);

 if(! ((im1>=0 && im1<=30) && (im2>=0 && im2<=30) && (im3>=0 && im3<=30) && (im4>=0 && im4<=30)))
 {
  printf("plz enter internel marks between 0 to 30");
 }

 else if(! ((tm1>=0 && tm1<=70) && (tm2>=0 && tm2<=70) && (tm3>=0 && tm3<=70) && (tm4>=0 && tm4<=70)))
 {
  printf("plz enter theory marks between 0 to 70");
 }

 else
 {
  if(im1>=12 && im2>=12 && im3>=12 && im4>=12 && tm1>=28 && tm2>=28 && tm3>=28 && tm4>=28)
  {
   total = im1 + im2 + im3 + im4 + tm1 + tm2 + tm3 + tm4;
   per = total/4;
   printf("\nTotal     : %d", total);
   printf("\nPercentage: %.2f",per);
   printf("\nResult    : PASS");
   if(per>=90)
      printf("\nGrade     : A+");
   else if(per>=80)
      printf("\nGrade     : A");
   else if(per>=70)
      printf("\nGrade     : B");
   else if(per>=60)
      printf("\nGrade     : C");
   else if(per>=50)
      printf("\nGrade     : D");
   else
      printf("\nGrade     : E");
  }
  else
  {
   total = im1 + im2 + im3 + im4 + tm1 + tm2 + tm3 + tm4;
   printf("\nTotal     : %d", total);
   printf("\nPercentage: ******");
   printf("\nResult    : FALL");
   printf("\nGrade     : F");
  }
 }
 getch();
}