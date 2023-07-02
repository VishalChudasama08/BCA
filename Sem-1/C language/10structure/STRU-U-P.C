/* write a c program to create student structure like rno,m1,m2,m3,total, and
   percentage and display using UDF and pointer*/
// structure with UDF and pointer
#include<stdio.h>
#include<conio.h>
void display(struct student *);
struct student {
    int rno,m1,m2,m3,total;
    float per;
};
void main() {
    struct student s1;
    clrscr();
    printf("Enter Roll no:- ");
    scanf("%d",&s1.rno);
    printf("Enter Mark 1:- ");
    scanf("%d",&s1.m1);
    printf("Enter Mark 2:- ");
    scanf("%d",&s1.m2);
    printf("Enter Mark 3:- ");
    scanf("%d",&s1.m3);
    s1.total=s1.m1+s1.m2+s1.m3;
    s1.per=s1.total/3;
    display(&s1);
    getch();
}
void display(struct student *x) {
    printf("\nRoll no\t | mark 1 | mark 2 | mark 3 | Total | percentage");
    printf("\n%3d\t |  %3d   |  %3d   |  %3d   |  %3d  |  %3.2f",x->rno,x->m1,x->m2,x->m3,x->total,x->per);
}