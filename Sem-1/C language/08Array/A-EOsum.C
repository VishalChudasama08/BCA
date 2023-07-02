/* sum of even number and odd numberv array element */
#include<stdio.h>
#include<conio.h>
void main()
{
   int a[10],i,esum=0,osum=0;
   clrscr();
   for(i=0;i<=9;i++)
   {
      printf("Enter Array %d Index Value: ",i);
      scanf("%d",&a[i]);
   }
   clrscr();
   printf("\n Array values \n");
   for(i=0;i<=9;i++)
   {
      if(a[i]%2==0)
	 esum+=a[i];
      else
	 osum+=a[i];
      printf("\n%2d",a[i]);
   }
   printf("\nEven Value sum is %d",esum);
   printf("\n Odd Value sum is %d",osum);
   getch();
}