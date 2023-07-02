#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
struct node {
  int info;
  struct node *ptr;
}*top, *top1, *temp;
//struct node *top = NULL;
int count = 0;

int topelement();
void push();
void pop();
void empty();
void display();
void destroy();
void stack_count();

void main() {
  int no, ch, e;
  while(1) {
    clrscr();
    printf("\n 1. Push");
    printf("\n 2. Pop");
    printf("\n 3. Peek");
    printf("\n 4. Empty");
    printf("\n 5. display");
    printf("\n 6. Stack Count");
    printf("\n 7. Destroy Stack");
    printf("\n 8. Exit");
    printf("\nEnter Choice : ");
    scanf("%d", &ch);
    switch(ch) {
      case 1:
      push();
      break;
      case 2:
      pop();
      break;
      case 3:
      if(top == NULL)
      printf("\nNo Elements in Stack");
      else {
        e = topelement();
        if(e != 0)
          printf("Top Elements %d", e);
      }
      break;
      case 4:
      empty();
      break;
      case 5:
      display();
      break;
      case 6:
      stack_count();
      break;
      case 7:
      destroy();
      break;
      case 8:
      exit(0);
      default:
      printf("\n Wrong choice plase enter correct choice");
      break;
    }
    getch();
  }
}

void creat() {
  top = NULL;
}

void stack_count() {
  printf("\n No. of elements in stack : %d", count);
}

void push() {
  int no;
  printf("\n Enter data : ");
  scanf("%d", &no);
  if(top == NULL) {
    top = (struct node *)malloc(sizeof(struct node));
    top->ptr = NULL;
    top->info = no;
  }
  else {
    temp = (struct node *)malloc(sizeof(struct node));
    temp->ptr = top;
    temp->info = no;
    top = temp;
  }
  count++;
}

void display() {
  top1 = top;
  if(top1 == NULL) {
    printf("Stack is empty");
    return;
  }
  while(top1 != NULL) {
    printf("%d", top1->info);
    top1 = top1->ptr;
  }
}

void pop() {
  if(top == NULL) {
    printf("ERROR : Trying to pop from empty stack");
    return;
  }
  else {
    top1 = top;
    printf("\n Peeped value : %d", top1->info);
    top = top->ptr;
    free(top1);
    count--;
  }
}

int topelement() {
  int co = 0, n, i;
  top1 = top;
  if(top1 == NULL) {
    printf("stack is empty");
    return;
  }
  while(top1 != NULL) {
    co++;
    top1 = top1->ptr;
  }
  printf("Enter possion of stack");
  scanf("%d", &n);
  if(n >= 0 && n < co) {
    top1 = top;
    for(i = 0; i < co; i++) {
      if(i == n) {
	return (top1->info);
	break;
      }
      top1 = top1->ptr;
    }
  }
  else {
    printf("\nOut of Range stack Element value");
    return 0;
  }
}

void empty() {
  if(top == NULL)
  printf("\n stack is empty");
  else
  printf("\n stack is not empty with %d element", count);
}

void destroy() {
  top1 = top;
  while(top1 != NULL) {
    top1 = top->ptr;
    free(top);
    top = top1;
    top = top1->ptr;
  }
  free(top1);
  top = NULL;
  printf("\n All stack element destroyed");
  count = 0;
}