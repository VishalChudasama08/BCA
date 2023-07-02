/* structure of structure (nested structure) */
#include<stdio.h>
#include<conio.h>
struct college {
    char cname[30];
    int ccode;
    struct student {
	int rno,m1,m2,m3,total;
	float per;
	char name[30];
    }s1;
}c1;
void main() {
    clrscr();
    printf("Enter college name:- ");
    gets(c1.cname);
    printf("Enter college code:- ");
    scanf("%d",&c1.ccode);
    printf("Enter Roll no:- ");
    scanf("%d",&c1.s1.rno);
    printf("Enter Name:- ");
    flushall();
    gets(c1.s1.name);
    printf("Enter Mark 1:- ");
    scanf("%d",&c1.s1.m1);
    printf("Enter Mark 2:- ");
    scanf("%d",&c1.s1.m2);
    printf("Enter Mark 3:- ");
    scanf("%d",&c1.s1.m3);
    c1.s1.total=c1.s1.m1+c1.s1.m2+c1.s1.m3;
    c1.s1.per=c1.s1.total/3;
    printf("\nCollege Name :- %s",c1.cname);
    printf("\nCollege code :- %d",c1.ccode);
    printf("\nRoll no\t | Name\t | mark 1 | mark 2 | mark 3 | Total | percentage");
    printf("\n%3d\t |%s |  %3d   |  %3d   |  %3d   |  %3d  |  %3.2f",c1.s1.rno,c1.s1.name,c1.s1.m1,c1.s1.m2,c1.s1.m3,c1.s1.total,c1.s1.per);
    getch();
}
