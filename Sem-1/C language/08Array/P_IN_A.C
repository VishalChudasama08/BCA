#include<stdio.h>
void main() {
    int i, a[5]={1,2,3,4,5};
    int *p = &a[0];
    clrscr();
    for(i=0;i<5;i++){
       printf("%d",*p);
       p++;
    }
    getch();
}