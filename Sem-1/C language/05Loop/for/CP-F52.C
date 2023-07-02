/* write a c program to read a number from the user and display sum of even
   digit amd odd digit (using for loop)
   ex.
   number  :- 564
   even sum:- 10
   odd sum :- 5
*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,osum=0,esum=0,d;
 clrscr();

 printf("\nEnterv number: ");
 scanf("%d",&n);

 for( ;n!=0;n=n/10)
 {
  d=n%10;
  if(d%2==0)
     esum+=d;
  else
	 osum+=d;
 }
 printf("\nEven digit sum: %d",esum);
 printf("\nodd digit osum: %d",osum);
 getch();
}