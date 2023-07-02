// sorting in asending order
#include<stdio.h>
#include<conio.h>
void main()
{
   int a[10],i,j,ex;
   for(i=0;i<10;i++)
   {
      printf("Entet Array element value [%d]",i);
   }
   printf("\nArray Values is \n");
   for(i=0;i<10;i++)
   {
      printf("\n%2d",a[i]);
   }
   for(i=0;i<10;i++)
   {
      for(j=i;j<10;j++)
      {
	 if(a[i]<a[j])
	 {
	    ex=a[i];
	    a[i]=a[j];
	    a[j]=ex;
	 }
      }
   }
   printf("\nSorting Array values is \n");
   for(i=0;i<10;i++)
   {
      printf("\n%2d",a[i]);
   }
   getch();
}