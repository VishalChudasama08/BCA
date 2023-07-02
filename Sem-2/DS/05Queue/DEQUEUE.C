//DEQueue (Double Ended Queue)
#include<stdio.h>
#include<conio.h>
#include<stdio.h>
#include<stdlib.h>
#define MAX 10

typedef struct dequeue{
	int front, rear;
	int arr[MAX];
}dqueue;

void enqueue(dqueue *, int, int);
void de_queue(dqueue *, int);
void display(dqueue *);
void main(){
	int ch, num;
	struct dequeue q;
	q.front = 0;
	q.rear = -1;
	while(1){
		clrscr();
		printf("\n Menu-Double Ended Queue");
		printf("\n 1. Enqueue Begin");
		printf("\n 2. Enqueue End");
		printf("\n 3. Dequeue Begin");
		printf("\n 4. Dequeue End");
		printf("\n 5. Display");
		printf("\n 6. Exit");
		printf("\n Enter your choice : ");
		scanf("%d", &ch);
		switch(ch){
			case 1:
			printf("\nEnter the number: ");
			scanf("%d", &num);
			enqueue(&q, num, 0);
			break;
			case 2:
			printf("\nEnter the number: ");
			scanf("%d", &num);
			enqueue(&q, num, 1);
			break;
			case 3:
			de_queue(&q, 0);
			printf("\nDeleting element from beginnig ");
			break;
			case 4:
			de_queue(&q, 1);
			printf("\nDeleting element from End ");
			break;
			case 5:
			display(&q);
			break;
			case 6:
			exit(0);
			default :
			printf("\nInvalid choice");
		}
		getch();
	}
}

void enqueue(dqueue *q, int x, int flag){
	int i;
	if(q->rear == MAX-1){
		printf("\nQueue Overflow");
		exit(1);
	}
	if(flag == 0){
		for(i = q->rear; i >= q->front; i--){
			q->arr[i + 1] = q->arr[i];
		}
		q->arr[q->front] = x;
		q->rear++;

	}
	else if(flag == 1){
		q->arr[++q->rear] = x;
	}
	else{
		printf("\n Invalid flag value");
		return;
	}
}

void de_queue(dqueue *q, int flag){
	int i;
	if(q->rear < q->front){
		printf("\nQueue Underflow...");
		exit(1);
	}
	if(flag == 0){
		for(i = q->front; i <= q->rear; i++){
			q->arr[i] = q->arr[i + 1];
		}
		q->arr[q->rear] = 0;
		q->rear--;
	}
	else if(flag == 1){
	  q->arr[q->rear--] = 0;
	}
	else{
	  printf("\nInvalid flag value...!");
	  return;
	}
}

void display(dqueue *q){
  int i;
  for(i = q->front; i <= q->rear; i++){
  printf("\n%d",q->arr[i]);
  }
}