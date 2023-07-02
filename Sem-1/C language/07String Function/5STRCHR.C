#include<stdio.h>
#include<string.h>
void main()
{
	char str1[20]="computer program";
	char *ptr;
	char ch='p';
	clrscr();
	ptr=strchr(str1,'c'); // str1 ma 'c' che tya thi badhi string ptr ne aapo =ptr che aetle
	// srtchr() ma string ae tena first characters(occurrence) thi aezaen thay chhe
	printf("The first occurrence of %c in %s is %s\n",ch,str1,ptr);
	getch();
}