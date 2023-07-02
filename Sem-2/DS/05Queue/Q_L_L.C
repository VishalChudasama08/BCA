#include <stdio.h>
#include <stdlib.h>
#define MAX 10
struct node
{
    int data;
    struct node *link;
} * front, *rear;

void insert();
void delet();
void queue_size();
void check();
void first_element();

void main()
{
    int choice, value;
    while (1)
	{
		clrscr();
        printf("\n 1. Create an empty queue");
        printf("\n 2. Insert element");
        printf("\n 3. Dequeue an element");
        printf("\n 4. check if empty");
        printf("\n 5. First element of the queue;");
        printf("\n 6. Display");
		printf("\n 7. Exit\n");
		printf("\n Enter Your choice : ");
		scanf("%d", &choice);
		switch(choice){
        case 1:
			printf("Empty queue is created with a capacity of %d\n", MAX);
            break;
        case 2:
            insert();
            break;
        case 3:
            delet();
			break;
		case 4:
			check();
            break;
        case 5:
            first_element();
            break;
        case 6:
            queue_size();
            break;
        case 7:
            exit(0);
        default:
            printf("Wrong choice\n");
            break;
        }
        getch();
        clrscr();
    }
}

void insert()
{
	struct node *temp;
	char ch;
	do{
		temp = (struct node *)malloc(sizeof(struct node));
		printf("\nEnter value to be inserted : ");
		scanf("%d", &temp->data);
		temp->link = NULL;
		if (rear == NULL)
		{
			front = rear = temp;
		}
		else
		{
			rear->link = temp;
			rear = temp;
		}
		printf("\nDo You want to add another Queue Element ? (y/n) : ");
		ch = getche();
	}while(ch=='Y' || ch=='y');
}

void delet()
{
    struct node *temp;
    temp = front;
    if (front == NULL)
    {
        printf("queue is empty\n");
        front = rear = NULL;
    }
    else
    {
        printf("deleted element is %d\n", front->data);
        front = front->link;
        free(temp);
    }
}

void check()
{
    if (front == NULL)
        printf("\nQueue is empty\n");
    else
        printf("\n Elements are present in the queue\n");
}

void first_element()
{
    if (front == NULL)
    {
        printf("\n The queue is empty\n");
    }
    else
    {
        printf("The front element is %d\n", front->data);
    }
}

void queue_size()
{
    struct node *temp;
    int cnt = 0;
    temp = front;
    if (front == NULL)
    {
        printf("queue empty\n");
    }
    while (temp)
    {
        printf("\n%d", temp->data);
        temp = temp->link;
        cnt++;
    }
    printf("\nsize of queue is %d\n", cnt);
}