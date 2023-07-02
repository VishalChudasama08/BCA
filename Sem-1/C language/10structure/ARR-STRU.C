/* write a c program to accept 5 student marks and prepaire a marksheet
   display array with structure */
// array with structure
#include<stdio.h>
#include<conio.h>

struct student {
    int rno,m1,m2,m3,total;
    float per;
    char name[30];
};
void main() {
    struct student s1[5];
    int i;
    clrscr();
    for(i=0;i<5;i++)
    {
	printf("Enter Roll no:- ");
	scanf("%d",&s1[i].rno);
	printf("Enter Name:- ");
	flushall();
	gets(s1[i].name);
	printf("Enter Mark 1:- ");
	scanf("%d",&s1[i].m1);
	printf("Enter Mark 2:- ");
	scanf("%d",&s1[i].m2);
	printf("Enter Mark 3:- ");
	scanf("%d",&s1[i].m3);
	s1[i].total=s1[i].m1+s1[i].m2+s1[i].m3;
	s1[i].per=s1[i].total/3;
	printf("\nRoll no\t | Name\t | mark 1 | mark 2 | mark 3 | Total | percentage");
	printf("\n%3d\t |%s |  %3d   |  %3d   |  %3d   |  %3d  |  %3.2f\n",s1[i].rno,s1[i].name,s1[i].m1,s1[i].m2,s1[i].m3,s1[i].total,s1[i].per);
    }
    getch();
}