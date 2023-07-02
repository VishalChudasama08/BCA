#include<stdio.h>
void main(int argc, char*argv[]) {
    printf("This args Count is %d \n",argc);
    if(argc==2) {
	printf("The argument supplied is %s\n",argv[1]);
    }
    else if(argc>2) {
	printf("Too many argument supplied.\n");
    }
    else {
	printf("One argument expectd.\n");
    }
    getch();
}