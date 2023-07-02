// BUCKET  SORT
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
   int a[MAX],i,n;
   printf("\nEnter the Element : ");
   scanf("%d",&n);
   for(i=0;i<n;i++)
   {
      printf("Enter Element %d: ",i+1);
      scanf("%d",&a[i]);
   }
   printf("\n%d values before sorting are\n",n);
   for(i=0;i<n;i++)
   {
      printf("\n%4d",a[i]);
   }
   bucket_sort(a,n);
   printf("%d values after sorting are \n",n);
   for(i=0;i<n;i++)
   {
      printf("\n%4d",a[i]);
   }
   getch();
}
int bucket_sort(int a[], int n)
{
   int i,j,lrg,dig,div,bucket[10],bukt[10][10],r,p,k;
   i=0;
   lrg=a[i];
   while(i<n) // Find max value
   {
      if(a[i]>lrg)
	 lrg=a[i];
      i++;
   }
   dig=0;
   while(lrg>0) // Find max number digit, how many digit of max number
   {
      lrg/=10;
      dig++;
   }
   i=1;
   div=1;
   while(i<=dig) //
   {
      j=0;
      while(j<10) // give zero value in bucket, all are sem, it is 0
      {
	 bucket[j]=0;
	 j++;
      }
      j=0;
      while(j<n) //
      {
	 r=(a[j]/div)%10;
	 bukt[r][bucket[r]]=a[j];
	 bucket[r]++;
	 j++;
      }
      j=0;
      p=0;
      while(j<10)
      {
	 k=0;
	 while(k<bucket[j])
	 {
	    a[p]=bukt[j][k];
	    printf("\t%d",a[p]);
	    p++;
	    k++;
	 }
	 printf("\t%d time\n",i);
	 j++;
      }
      i++;
      div*=10;
      printf("\n");
   }
   return 0;
}