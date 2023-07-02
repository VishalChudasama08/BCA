//Queue in array
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define SIZE 5
int front = -1;
int rear = -1;
int q[SIZE];

void insert(int);
int del();
void display();
void change();
void main() {
   int choice, val;
   do {
      clrscr();
      printf("\n 1. Insert");
      printf("\n 2. Delete");
      printf("\n 3. Display");
      printf("\n 4. change");
      printf("\n 5. Exit");
      printf("\n Enter Your choice... : ");
      scanf("%d", &choice);
      switch(choice) {
         case 1:
         printf("\n Enter no : ");
         scanf("%d", &val);
         insert(val);
         break;
         case 2:
         val = del();
         if(val != -1) {
            printf("\n Deleted element is %d", val);
            break;
         }
         case 3:
         display();
         break;
         case 4:
         change();
         break;
         case 5:
         exit(0);
      }
      getch();
   }while(choice != 5);
}

void insert(int no) {
   if(rear < SIZE-1) {
      if(rear == -1) {
         front = 0;
      }
      rear++;
      q[rear] = no;
   }
   else {
      printf("\nQueue overflow.....");
   }
}

int del() {
   int val;
   if(front == -1) {
      printf("\nQueue overflow");
      return -1;
   }
   else {
      val = q[front];
   }
   if(front == rear) {
      front = -1;
      rear = -1;
   }
   else {
      front = front + 1;
   }
   return val;
}

void display() {
   int i;
   printf("\nFront : %d \n Rear : %d", front, rear);
   if(front == -1) {
      printf("\nQueue is empty");
      return;
   }
   for(i = front; i <= rear; i++) {
      printf("\n%d", q[i]);
   }
}

void change() {
   int n1, n, i, f = 0;
   printf("Which value you want to update : ");
   scanf("%d", &n1);
   printf("New value is : ");
   scanf("%d", &n);
   for(i = front; i < rear; i++) {
      if(q[i] == n1) {
         q[i] = n;
         f = i;
      }
   }
   if(f == 0)
   printf("No value in Queue");
}