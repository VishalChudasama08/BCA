#include<stdio.h>
#include<conio.h>
void main()
{
    int v=18, *g=&v ;
    clrscr();
    printf("\nint v=%d, *g=&v;\n",v);

    printf("\n g pointing v value(%%d)(*g) g=%d\n",*g);

    printf("\n Hexadecimal code(%%x)(*g):- g=%x\n",*g);

    printf("\n Addres of g(%%p)(&g):- \tg=%p\n",&g);
    printf("\n Addres of v(%%p)(&v):- \tg=%p\n",&v);
    printf("\n Addres of v(%%p)(g):- \tg=%p\n",g);
    getch();
}