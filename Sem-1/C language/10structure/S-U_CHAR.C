/* write a c program to create student structure like rno,name,m1,m2,m3,
   total,and percentage and display using array */
// structure with array
#include<stdio.h>
#include<conio.h>
void display(struct student);
struct student {
    int rno,m1,m2,m3,total;
    float per;
    char name[30];
}s1;
void main() {
    clrscr();
    printf("Enter Roll no:- ");
    scanf("%d",&s1.rno);
    printf("Enter Name:- ");
    flushall();
    gets(s1.name);
    printf("Enter Mark 1:- ");
    scanf("%d",&s1.m1);
    printf("Enter Mark 2:- ");
    scanf("%d",&s1.m2);
    printf("Enter Mark 3:- ");
    scanf("%d",&s1.m3);
    s1.total=s1.m1+s1.m2+s1.m3;
    s1.per=s1.total/3;
    display(s1);
    getch();
}
void display(struct student x) {
    printf("\nRoll no\t | Name\t | mark 1 | mark 2 | mark 3 | Total | percentage");
    printf("\n%3d\t |%s |  %3d   |  %3d   |  %3d   |  %3d  |  %3.2f",x.rno,x.name,x.m1,x.m2,x.m3,x.total,x.per);
}