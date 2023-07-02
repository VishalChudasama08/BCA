#include<stdio.h>
#include<conio.h>
void main() {
     int a,*p,**p1;
     clrscr();
     printf("Enter value of a :- ");
     scanf("%d",&a);

     printf("\n Value of a is %d",a);
     printf("\n Address of a %u",&a);

     p=&a;
     printf("\n\n Simple Pointer(p) :-");
     printf("\n Using simple pointer, value of a is : %d",*p);
     printf("\n Using simple pointer, value of p is : %u",p);
     printf("\n Using simple pointer, value of p is : %u",&*p);
     printf("\n Using simple pointet, Address of p is : %u",&p);

     p1=&p;
     printf("\n\n Pointer of Pointer(p1):-");
     printf("\n Using Doble pointer, value of a is : %d",**p1);
     printf("\n Using Doble pointer, value of p is : %u",*p1);
     printf("\n Using Doble pointer, value of p1 is : %u",p1);
     printf("\n Using Doble pointer, value of p1 is : %u",&*p1);
     printf("\n Using Doble pointer, Address of p is : %u",&**p1);
     printf("\n Using Doble pointer, Address of p is : %u",&*p1);
     printf("\n Using Doble pointer, Address of p1 is : %u",&p1);
     getch();
     // variable -->    a       p       p1
     // value    -->   18     65524   65522
     // address  -->  65524   65522   65520

     // je print thay chhe te koy no pan address(value svarupe) hoy to %u no use thay
     // address print kar va mate & no upyog kar vi pachhi jeno address print kar vo hoy te ex. &p, &*p, &**p1
     // simple rite samajva *p aetle aek step pachhad che te a ni value,
     // *p1 aetle *p ni jem aek step pachhad che te p ni value,
     // **p1 atle be step pachhad che te a ni value, sem aaj rite address mate.
}