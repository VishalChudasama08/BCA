#include<stdio.h>
#include<conio.h>
void main()
{
 float a;
 clrscr();
 printf("Enter value:");
 scanf("%f",&a);
 if(a>=100 || a<=0)
     printf("Invalid Input plz Input Between 1 to 100");
 else if(a>=91)
     printf("A1");
 else if(a>=81)
     printf("A2");
 else if(a>=71)
     printf("B1");
 else if(a>=61)
     printf("B2");
 else if(a>=51)
     printf("C1");
 else if(a>=41)
     printf("C2");
 else if(a>=33)
     printf("D");
 else
     printf("E/F");
 getch();
}


