#include<stdio.h>
#include<conio.h>
void main() 
{
    int row,p=1,sp,i,j;
    clrscr();
    printf("Enter the number of rows: ");
    scanf("%d",&row);
    for(i=0;i<row;i++) 
    {
        for(sp=1;sp<=row-i;sp++) 
        {
            printf(" ");

        }
        for(j=0;j<=i;j++) 
        {
            if(j==0 || i==0)
                p=1;
            else
                p=p*(i-j+1)/j;
            printf("%4d",p);
        }
        printf("\n");
    }
    getch();
}