#include<stdio.h>
#include<conio.h>
void main()
{
 char g;
 int age;
 clrscr();
 printf("Enter Gender: ");
 g=getchar();
 printf("Enter Age: ");
 scanf("%d",&age);

 if(g=='m' || g=='M' || g=='f' || g=='F')
 {
     if((g=='m' || g=='M') && age>=21)
	 printf("Male is allow to marriage");
     else if((g=='f' || g=='F') && age>=18)
	 printf("Female is allow  to marriage");
     else
	 printf("Invalid Input");
 }
 else
     printf("ony Input M for Male and F for Female");
 getch();
}