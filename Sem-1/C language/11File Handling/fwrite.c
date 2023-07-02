#include<stdio.h>
struct threeNum {
    int n1, n2, n3;
};
void main() {
    int n;
    struct threeNum num;
    FILE *fptr;
    if((fptr=fopen("C:\\program.bin","wb"))==NULL) {
        printf("Error! opening file");
        exit(1);
    }
    for(n=1;n<5;++n){
        num.n1=n;
        num.n1=5n;
        num.n3=5n+1;
        fwrite(&num, sizeof(struct threeNum),1,fptr);
    }
    fclose(fptr);
    getch();
}