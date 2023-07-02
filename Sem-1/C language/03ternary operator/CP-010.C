/* write a C program if the marks obtained by a student in five different subject are input through the keybord find out the aggregate marks and percentage marks obbtained by
the student assume that the maximun marks that can be obtained by a student in each subjects in 100 */

#include<stdio.h>
#include<conio.h>
main()
{
 int s1, s2, s3, s4, s5, total;
 float per;
 clrscr();

 printf("Enter the mark of subject 1: ");
 scanf("%d",&s1);
 printf("Enter the mark of subject 2: ");
 scanf("%d",&s2);
 printf("Enter the mark of subject 3: ");
 scanf("%d",&s3);
 printf("Enter the mark of subject 4: ");
 scanf("%d",&s4);
 printf("Enter the mark of subject 5: ");
 scanf("%d",&s5);

 total=s1 + s2 + s3 + s4 + s5;
 printf("\ntotal marks: %d",total);

 per= total/5;
 printf("\nprcentage: %f",per);
 getch();
}