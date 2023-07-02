/* write a c program to read a number from the user and check that number is
   a armstong or not
   ex.
      153 number is armstong
   digit              :   1    ,    5    ,    3
   digit cube         :(1*1*1) + (5*5*5) + (3*3*3)
   digit cube addtion :   1    +   125   +   27
  total               :153
  (using do.... while loop)
*/

#include<stdio.h>
#include<conio.h>
void main()
{
 int n,ex,sum=0,d;
 clrscr();

 printf("\nEnter a number: ");
 scanf("%d",&n);
 ex=n;
 do
 {
  d=n%10;
  sum+=(d*d*d);
  n=n/10;
 }while(n!=0);
 if(ex==sum)
    printf("\nArmstong number");
 else
    printf("\nNot Armstong number");
 getch();
}