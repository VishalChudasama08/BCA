//circular queue
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define size 5
//function declare
void insert();
void display();
void del();
//array for Queue
int q[size];
//Global variable declare
int front = -1, rear = -1;

void main() {
   int ch;
   while(1) {
      clrscr();
      printf("\n Menu");
      printf("\n1. Insert");
      printf("\n2. Delete");
      printf("\n3. Display");
      printf("\n4. Exit");
      printf("\nEnter selection : ");
      scanf("%d", &ch);
      switch(ch) {
         case 1:
         insert();
         break;
         case 2:
         del();
         break;
         case 3:
         display();
         break;
         case 4:
         printf("\nBye !");
         exit(0);
         default:
         printf("\nInvalid Input");
         break;
      }
      getch();
   }
}
void insert() {
   int val;
   if(front == 0 && rear == size-1) {
      printf("Over Flow");
      rear = -1;
      front = 0;
      return;
   }
   else {
      if(front < 0) {
         //possible when front variable value is -1
         front = 0;
         rear = 0;
         printf("\n Input Value : ");
         scanf("%d", &val);
         q[rear] = val;
      }
      else {
         if(rear == size-1) {
            //possible when rear variable reached at last index of Array
            rear = 0;
            printf("\n Input Value : ");
            scanf("%d", &val);
         }
         else if(front == size-1) {
            // possible when front variable reached at last index of array
            front = 0;
            rear++;
            printf("\n Input Value : ");
            scanf("%d", &val);
            q[rear] = val;
         }
         else {
            if(front > rear)
            front++;
            rear++;
	    printf("\n Input Value : ");
            scanf("%d", &val);
            q[rear] = val;
         }
      }
   }
}

void del() {
   int val;
   if(front < 0) {
      printf("Under Flow");
      return;
   }
   val = q[front];
   q[front] = NULL;
   printf("\nThe Element is %d Deleted", val);
   if(front == rear) {
      front = -1;
      rear = -1;
   }
   else {
      if(front == size-1) {
         front = 0;
      }
      else {
         front++;
      }
   }
}

void display() {
   int i;
   if(front < 0)
   return;
   if(rear >= front) {
      for(i = front; i <= rear; i++) {
         printf("\n index %d and value is %d", i, q[i]);
      }
   }
   else {
      for(i = front; i < size; i++) {
         printf("\n index %d and value is %d", i, q[i]);
      }
      for(i = 0; i <= rear; i++) {
         printf("\n index %d and value is %d", i, q[i]);
      }
   }
}