#include<stdio.h>
#include<conio.h>
void main()
{
    int a[3][3],i,j;
    clrscr();
    printf("\nARRAY INPUT\n");
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
            printf("Enter Array Value a[%d][%d] : ",i,j);
            scanf("%d",&a[i][j]);
        }
    }
    printf("\nARRAY DISPLAY\n");
    for(i=0;i<3;i++) 
    {
        for(j=0;j<3;j++) 
        {
            printf("%2d",a[i][j]);
        }
        printf("\n");
    }
    getch();
}