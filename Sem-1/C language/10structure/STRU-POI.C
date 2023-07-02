/* write a c program to create student structure like rno,m1,m2,m3,total, and,
   percentage and display using pointer */
// structure with pointer
#include<stdio.h>
#include<conio.h>
struct student {
    int rno,m1,m2,m3,total;
    float per;
};
void main() {
    struct student *s1;
    clrscr();
    printf("Enter Roll no:- ");
    scanf("%d",&s1->rno);
    printf("Enter Mark 1:- ");
    scanf("%d",&s1->m1);
    printf("Enter Mark 2:- ");
    scanf("%d",&s1->m2);
    printf("Enter Mark 3:- ");
    scanf("%d",&s1->m3);
    s1->total=s1->m1+s1->m2+s1->m3;
    s1->per=s1->total/3;
    printf("\nRoll no\t | mark 1 | mark 2 | mark 3 | Total | percentage");
    printf("\n%3d\t |  %3d   |  %3d   |  %3d   |  %3d  |  %3.2f",s1->rno,s1->m1,s1->m2,s1->m3,s1->total,s1->per);
    getch();
}
