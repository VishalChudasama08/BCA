#include<stdio.h>
#include<conio.h>
void main() 
{
    int a[5],i,ex,sum,d;
    clrscr();
    for(i=0;i<=4;i++)
    {
        printf("Enter Array Element :- ");
        scanf("%d",&a[i]);
    }
    for(i=0;i<=4;i++)
    {
        d=0;
        for(ex=2;ex<a[i];ex++) 
        {
            if(a[i]%ex==0) 
            {
                d=1;
                break;
            }
        }
        if(d==0)
        printf("\nPrime NUmber %d",a[i]);
    }
    getch();
}