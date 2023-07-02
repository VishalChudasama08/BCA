// polindrom number using array
#include<stdio.h>
#include<conio.h>
void main()
{
   int a[10],i,ex,d,sum;
   clrscr();
   for(i=0;i<=9;i++)
   {
      printf("Enter array %d element value:- ",i);
      scanf("%d",&a[i]);
   }
   for(i=0;i<=9;i++)
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
	 printf("\n%d number is Polindrom",a[i]);
      else
	 printf("\n%d number is not Polindrom",a[i]);
   }
   getch();
}