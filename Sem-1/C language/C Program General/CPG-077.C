#include<stdio.h>
#include<conio.h>
void main() 
{
    int a[5],i,ex,d,sum;
    clrscr();
    for(i=0;i<=4;i++)
    {
        printf("Enter Array %d Element Value :-",i);
        scanf("%d",&a[i]);
    }
    for(i=0;i<=4;i++)
    {
        ex=a[i];
        sum=0;
        while(ex!=0) 
        {
            d=ex%10;
            sum=(sum*10)+d;
            ex=ex/10;
        }
        if(a[i]==sum)
            printf("\n%d number is Polindrom ",a[i]);
        else
            printf("\n%d number is Not Polindrom ",a[i]);
    }
    getch();
}