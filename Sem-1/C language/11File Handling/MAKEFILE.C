/* write a c program to read and marks of n number of student from user and
   store them in a file */
#include<stdio.h>
void main()
{
    char name[50];
    int marks,i,n;
    FILE *fptr;
    clrscr();
    printf("Enter number of student: ");
    scanf("%d",&n);
    fptr=(fopen("c:\\student.txt","w"));
    if(fptr==NULL)
    {
	printf("Error!");
	exit(1);
    }
    for(i=0;i<n;++i)
    {
	printf("For student %d \nEnter name:- ",i+1);
	scanf("%s",&name);
	printf("Enter marks: ");
	scanf("%d",&marks);
	fprintf(fptr,"\nName:- %s\nmarks= %d\n",name,marks);
    }
    fclose(fptr);
    getch();
}