#include<stdio.h>
#include<string.h>
int main()
{
   char str1[]="To be or not to be", str2[6];
   clrscr();
   strncpy(str2,str1,5); // s2 ma s1 na 5 chara. copiy karo
   str2[5]='\0'; // str1 ma 6 na sthane spesh chhe tethi str2[5]='\0' kar ta tena thu stop thay chhe
   puts(str2);
   getch();
   return 0;
}