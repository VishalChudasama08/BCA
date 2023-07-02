// shellsort
#include<stdio.h>
#include<conio.h>
#define MAX 20
void main()
{
	int a[MAX],i,j,n;
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
	shellsort(a,n);
	printf("\n%d values after sorting are \n",n);
	for(i=0;i<n;i++)
	{
		printf("\n%4d",a[i]);
	}
}
int shellsort(int *array, int ele)
{
   int i,j,k,temp;
   for(i=ele/2;i>0;i/=2)
   {
      for(j=i;j<ele;j++)
      {
	 temp=array[j];
	 for(k=j;k>=i;k-=i)
	 {
	    if(temp<array[k-i])
	       array[k]=array[k-i];
	    else
	       break;
	 }
	 array[k]=temp;
      }
   }
   return 0;
}
