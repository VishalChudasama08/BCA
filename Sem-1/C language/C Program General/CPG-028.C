#include<stdio.h>
#include<conio.h>
void main()
{
 int a,b,c;
 clrscr();
 printf("Enter 1st(A) number: ");
 scanf("%d",&a);
 printf("Enter 2nd(B) number: ");
 scanf("%d",&b);
 printf("Enter 3rd(C) number: ");
 scanf("%d",&c);
 if(a==b && a==c)
     printf("All are Equal");
 else if(a==b && a>c)
     printf("A and B are Equal and Max");
 else if(a==b && a<c)
     printf("A and B are Equal but C is Max");
 else if(a==c && a>b)
     printf("A and C are Equal and Max");
 else if(a==c && a<b)
     printf("A and C are Equal but B is Max");
 else if(b==c && b>a)
     printf("B and C are Equal and Max");
 else if(b==c && a<c)
     printf("B and C are Equal but A is Max");
 else if(a>b && a>c)
     printf("A is Max");
 else if(b>a && b>c)
     printf("B is Max");
 else
     printf("C is Max");
 getch();
}