#include<stdio.h>
#include<conio.h>
main()
{
    int a[100][100],b[100][100],c[100][100];
    int i,j,k,r1,r2,c1,c2;
    clrscr();
    printf("\n Enter 1st matrix Row Size ");
    scanf("%d",&r1);
    printf("\n Enter 1st matrix COl. Size ");
    scanf("%d",&c1);
    printf("\n Enter 2nd matrix Row Size ");
    scanf("%d",&r2);
    printf("\n Enter 2nd matrix COl. Size ");
    scanf("%d",&c2);
    clrscr();
    if(r1==c2 || c1==r2 || (r1==r2 && c1==c2))
    {
        for(i=0;i<r1;i++)
        {
            for(j=0;j<c1;j++)
            {
                printf("Enter value in 1st Matrix");
                scanf("%d",&a[i][j]);
            }
        }
        for(i=0;i<r2;i++)
        {
            for(j=0;j<c2;j++)
            {
                printf("Enter value in 2nd Matrix");
                scanf("%d",&b[i][j]);
            }
        }
        clrscr();
        printf("\nFirst Matrix\n");
        for(i=0;i<r1;i++)
        {
            for(j=0;j<c1;j++)
            {
                printf("%2d\t",a[i][j]);
            }
            printf("\n");
        }
        printf("\n Second Matrix\n");
        for(i=0;i<r2;i++)
        {
            for(j=0;j<c2;j++)
            {
                printf("%2d\t",b[i][j]);
            }
            printf("\n");
        }
        if(r1==r2 && c1==c2)
        {
            for(i=0;i<r1;i++)
            {
                for(j=0;j<c1;j++)
                {
                    c[i][j]=0;
                    for(k=0;k<c1;k++)
                    {
                        c[i][j]+=a[i][k]*b[k][j];
                    }
                }
            }
            printf("\n Multiplication Of Matrix is \n");
            for(i=0;i<r1;i++)
            {
                for(j=0;j<c1;j++)
                {
                    printf("%2d\t",c[i][j]);
                }
                printf("\n");
            }
        }
        if(c1==r2)
        {
            for(i=0;i<r1;i++)
            {
                for(j=0;j<c2;j++)
                {
                    c[i][j]=0;
                    for(k=0;k<c1;k++)
                    {
                        c[i][j]+=a[i][k]*b[k][j];
                    }
                }
            }
            printf("\n Multiplication Of Matrix is \n");
            for(i=0;i<r1;i++)
            {
                for(j=0;j<c2;j++)
                {
                    printf("%2d\t",c[i][j]);
                }
                printf("\n");
            }
        }
        if(r1==c2)
        {
            for(i=0;i<c1;i++)
            {
                for(j=0;j<r2;j++)
                {
                    c[i][j]=0;
                    for(k=0;k<c2;k++)
                    {
                        c[i][j]+=a[i][k]*b[k][j];
                    }
                }
            }
            printf("\n Multiplication Of Matrix is \n");
            for(i=0;i<c1;i++)
            {
                for(j=0;j<r2;j++)
                {
                    printf("%2d\t",c[i][j]);
                }
                printf("\n");
            }
        }
    }
    else
    {
        printf("\n Not Possible ");
    }
    getch();
}


