#include<stdio.h>
void main() {
  int num;
  FILE *fptr;
  fptr = fopen("C:\\program.txt","w");
  if(fptr==NULL) {
    printf("Error!");
    exit(1);
  }
  printf("Enter num: ");
  scanf("%d",&num);
  fprintf(fptr,"%d",num);
  fclose(fptr);
}