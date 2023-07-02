// stack
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define MAX 10
int stack[MAX], top;
void display();
void push(int);
int pop();
void peep();
void change();
int main() {
  char ch;
  int choice, token;
  top = -1;
  while(1) {
    clrscr();
    printf("\n 1. Push");
    printf("\n 2. Pop");
    printf("\n 3. Display");
    printf("\n 4. Peep");
    printf("\n 5. Change");
    printf("\n 6. Exit");
    printf("\n Enter Your Choice for the operation: ");
    scanf("%d", &choice);
    switch(choice) {
      case 1:
      push(token);
      break;
      case 2:
      token = pop();
      printf("\nThe token deleted is %d", token);
      break;
      case 3:
      display();
      break;
      case 4:
      peep();
      break;
      case 5:
      change();
      break;
      case 6:
      exit(0);
      default:
      printf("wrong choice");
      break;
    }
    getch();
  }
}

void push(int token) {
  char a;
  do {
    if(top == MAX-1) {
      printf("  Stack full");
      return;
    }
    printf("\n Enter the token to be inserted : ");
    scanf("%d", &token);
    top = top + 1;
    stack[top] = token;
    printf(" Do you want to continue insertion (y/n) : ");
    a = getche();
  }while(a == 'y' || a == 'Y');
}

int pop() {
  int t;
  if(top == 1) {
    printf("Stack empty");
    return -1;
  }
  t = stack[top];
  top = top - 1;
  return t;
}

void display() {
  int i;
  printf("\n The stack elements are: ");
  for(i = top; i >= 0; i--) {
    printf("\n%d", stack[i]);
  }
}

void peep() {
  int x;
  if(top < 0) {
    printf("\n Stack is Empty");
  }
  else {
    printf("\n Enter The Position To Read The Element : ");
    scanf("%d", &x);
    if(x < 0 || x > (top + 1)) {
      printf("\n out of Range");
    }
    else {
      printf("\nThe Peeped Element is %d", stack[top - (x + 1)]);
    }
  }
}

void change() {
  int x;
  if(top < 0) {
    printf("\n stack is Empty");
  }
  else {
    printf("\n Enter The Position: ");
    scanf("%d", &x);
    if(x < 0 || x > top + 1) {
      printf("\n out of Rang: ");
    }
    else {
      printf("\n Enter New data: ");
      scanf("%d", &stack[top - (x -1)]);
      printf("Inputted New element %d", stack[top - (x + 1)]);
    }
  }
}