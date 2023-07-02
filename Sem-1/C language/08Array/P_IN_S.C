#include<stdio.h>
#include<conio.h>
const int max = 3;
void main() {
   char *names[]={"Adam","Chris","Deniel"};
   int i;
   clrscr();
   for(i=0;i<max;i++){
       printf("Value of names[%d] = %s\n",i,names[i]);
   }
   getch();
}