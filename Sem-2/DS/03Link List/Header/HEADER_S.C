//header singly
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node{
  int data;
  struct node *next;
}*start;
int i, number;
struct node *new1;

void create(struct node *);
void display(struct node *);
void insert_first(struct node *);
void insert_last(struct node *);
void insert_node_number(struct node *);
void delete_first(struct node *);
void delete_last(struct node *);
void delete_Node_number(struct node *);
void count(struct node *);
void main() {
  int num;
  while(1) {
    clrscr();
    printf("\n 1. Create");
    printf("\n 2. Display");
    printf("\n 3. Insert First");
    printf("\n 4. Insert Last");
    printf("\n 5. Insert Node Number");
    printf("\n 6. Delete First");
    printf("\n 7. Delete Last");
    printf("\n 8. Delete Node Number");
    printf("\n 9. Count");
    printf("\n10. EXIT");
    printf("\nEnter Number: ");
    scanf("%d", &num);
    switch(num) {
      case 1:
        start = (struct node *)malloc(sizeof(struct node *));
        create(start);
        break;
      case 2:
        display(start);
        break;
      case 3:
        insert_first(start);
        break;
      case 4:
        insert_last(start);
        break;
      case 5:
        insert_node_number(start);
        break;
      case 6:
        delete_first(start);
        break;
      case 7:
        delete_last(start);
        break;
      case 8:
        delete_Node_number(start);
        break;
      case 9:
        count(start);
        break;
      case 10:
        exit(0);
      default:
        printf("\nWRONG!, Enter between 1 to 10");
        break;
    }
    getch();
  }
  getch();
}

void create(struct node *temp) {
  char ch;
  start->next = NULL;
  temp = start;
  temp->next = (struct node *)malloc(sizeof(struct node *));
  i = 0;
  printf("\n Do You Want To Add More Node (y/n) : ");
  ch = getche();
  while(ch == 'y' || ch == 'Y') {
    temp->next = (struct node *)malloc(sizeof(struct node *));
    temp = temp->next;
    printf("\n Enter Node Value :- ");
    scanf("%d", &temp->data);
    temp->next = NULL;
    printf("\n Do You Want Add More Node (y/n) : ");
    ch = getche();
    i++;
  }
  temp = start;
  temp->data = i;
}

void display(struct node *temp) {
  int count = temp->data;
  temp = start;
  temp = temp->next;
  printf("\nDisplay");
  while(count) {
    printf("\n%d", temp->data);
    temp = temp->next;
    count--;
  }
}

void insert_first(struct node *temp) {
  temp = start;
  new1 = (struct node*)malloc(sizeof(struct node *));
  new1->next = temp->next;
  temp->next = new1;
  printf("\n Enter Value Of Node Data : ");
  scanf("%d", &new1->data);
  temp = temp->next;
  temp = start;
  temp->data = temp->data+1;
}

void insert_last(struct node *temp) {
  temp = temp->next;
  new1 = (struct node*)malloc(sizeof(struct node *));
  while(temp->next != NULL) {
    temp = temp->next;
  }
  temp->next = new1;
  printf("\n Enter Value Of Node Data : ");
  scanf("%d", &new1->data);
  new1->next = NULL;

  temp = start;
  temp->data = temp->data+1;
}

void insert_node_number(struct node *temp) {
  int node_number = 1,insert_node,count;
  count = temp->data;
  temp = start;
  printf("\n Enter Node Number :- ");
  scanf("%d", &insert_node);
  while(count) {
    if(node_number == insert_node) {
      new1 = (struct node*)malloc(sizeof(struct node *));
      new1->next = temp->next;
      temp->next = new1;
      printf("\n Enter Value Of Node Data : ");
      scanf("%d", &new1->data);
      temp = temp->next;
    }
    else{
      temp = temp->next;
      count--;
    }
    node_number++;
  }
  temp = start;
  temp->data = temp->data+1;
}

void delete_first(struct node *temp) {
  struct node *temp1;
  temp = temp->next;
  temp1 = temp;
  start->next = temp->next;
  free(temp1);
  temp = start;
  temp->data = temp->data-1;
  printf("\n Node Deleted");
}

void delete_last(struct node *temp) {
  struct node *temp1;
  int count,j;
  count = temp->data;
  temp = temp->next;
  for(j = 1; j < count; j++) {
    temp1 = temp;
    temp = temp->next;
  }
  temp1->next = NULL;
  temp = start;
  temp->data = temp->data-1;
  printf("\n Node Deleted");
}

void delete_Node_number(struct node *temp) {
  struct node *temp1;
  int count,j,num,f = 0;
  printf("\n Enter Node Number Which You Want to Delete : ");
  scanf("%d", &num);
  count = temp->data;
  temp = temp->next;
  for(j = 1; j < count; j++) {
    if(j == (num-1)) {
      temp1 = temp;
      temp = temp->next;
      temp1->next = temp->next;
      free(temp);
      f = 1;
      break;
    }
    else{
      temp = temp->next;
    }
  }
  if(f != 0) {
    temp = start;
    temp->data = temp->data-1;
    printf("\n Node Deleted");
  }
}
void count(struct node *temp) {
  printf("\n Number of Node In Header Link List is %d \n", temp->data);
}