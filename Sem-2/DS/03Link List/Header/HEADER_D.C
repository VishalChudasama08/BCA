//header doubly  2.2
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node {
  struct node *pre;
  int data;
  struct node *next;
}*start, *last;
int i;
struct node *new1;

void create(struct node *);
void display(struct node *);
void rev_display(struct node *);
void insert_first(struct node *);
void insert_last(struct node *);
void insert_node_number(struct node *);
void delete_first(struct node *);
void delete_last(struct node *);
void delete_Node_number(struct node *);
void count(struct node *);
void show_link_list();
void show_all_node();
void main() {
  int num;
  while(1) {
    clrscr();
    printf("\n 1. Create");
    printf("\n 2. Display");
    printf("\n 3. Reverse Display");
    printf("\n 4. Insert First");
    printf("\n 5. Insert Last");
    printf("\n 6. Insert Node Number");
    printf("\n 7. Delete First");
    printf("\n 8. Delete Last");
    printf("\n 9. Delete Node Number");
    printf("\n10. Count");
    printf("\n11. EXIT");
    printf("\n12. show link list");
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
      rev_display(start);
      break;
      case 4:
      insert_first(start);
      break;
      case 5:
      insert_last(start);
      break;
      case 6:
      insert_node_number(start);
      break;
      case 7:
      delete_first(start);
      break;
      case 8:
      delete_last(start);
      break;
      case 9:
      delete_Node_number(start);
      break;
      case 10:
      count(start);
      break;
      case 11:
      exit(0);
      case 12:
      show_link_list();
      break;
      default:
      printf("\nWRONG!, Enter between 1 to 12");
      break;
    }
    getch();
  }
}

void show_link_list() {
  struct node *show;
  printf("Header Node: \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", start->pre, start->data, start->next, &*start);
  printf("+-------+-------+-------+\n\n");
  show = start->next;
  do {
    printf("+-------+-------+-------+\n");
    printf("| %d\t| %d\t| %d\t| <--%d\n", show->pre, show->data, show->next, &*show);
    printf("+-------+-------+-------+\n");
    show = show->next;
  }while(!show == NULL);
}

void show_all_node(struct node *temp, struct node *temp1, struct node *first_n) {
  /*printf("start : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", start->pre, start->data, start->next, &*start);
  printf("+-------+-------+-------+\n");*/

  printf("temp : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", temp->pre, temp->data, temp->next, &*temp);
  printf("+-------+-------+-------+\n");

  printf("first_n : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", first_n->pre, first_n->data, first_n->next, &*first_n);
  printf("+-------+-------+-------+\n");

  printf("temp1 : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", temp1->pre, temp1->data, temp1->next, &*temp1);
  printf("+-------+-------+-------+\n");

  /*printf("new1 : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", new1->pre, new1->data, new1->next, &*new1);
  printf("+-------+-------+-------+\n");*/

  printf("last : \n");
  printf("+-------+-------+-------+\n");
  printf("| %d\t| %d\t| %d\t| <--%d\n", last->pre, last->data, last->next, &*last);
  printf("+-------+-------+-------+\n");
}

void create(struct node *temp) {
  struct node *temp1;
  char ch;
  start->pre = NULL;
  start->next = NULL;
  temp = start;
  temp->next = (struct node *)malloc(sizeof(struct node *));
  i = 0;
  printf("\n Do You Want To Add More Node (y/n) : ");
  ch = getche();
  while(ch == 'y' || ch == 'Y') {
    temp->next = (struct node *)malloc(sizeof(struct node *));
    temp1 = temp;
    temp = temp->next;
    printf("\n Enter Node Value :- ");
    scanf("%d", &temp->data);
    temp->pre = temp1;
    temp->next = NULL;
    last = temp;
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

void rev_display(struct node *temp) {
  int count = temp->data;
  struct node *end;
  end = last;
  printf("\nReverse Display");
  while(count) {
    printf("\n%d", end->data);
    end = end->pre;
    count--;
  }
}

void insert_first(struct node *temp) {
  temp = start;

  new1 = (struct node*)malloc(sizeof(struct node));
  printf("\n Enter Value Of Node Data : ");
  scanf("%d", &new1->data);
  new1->pre = temp;
  new1->next = temp->next;
  temp->next->pre = new1;
  temp->next = new1;

  last->next = NULL;
  //show_all_node(temp, 0);
  temp = start;
  temp->data = temp->data+1;
}

void insert_last(struct node *temp) {
  new1 = (struct node *)malloc(sizeof(struct node));
  printf("\n Enter Value Of Node Data : ");
  scanf("%d", &new1->data);
  last->next = new1;
  new1->pre = last;
  new1->next = NULL;
  last = new1;
  //show_all_node(temp, 0);
  temp = start;
  temp->data = temp->data+1;
}

void insert_node_number(struct node *temp) {
  int first_number = 1,insert_number,count,last_number;
  count = temp->data;
  last_number = count+1;
  temp = start;
  printf("\n Where you want to add a node. Enter That Node Number :- ");
  scanf("%d", &insert_number);
  if(insert_number > last_number) {
    printf("Enter between 1 to %d", last_number);
  }
  else if(insert_number == first_number) {
    insert_first(start);
  }
  else if(insert_number == last_number) {
    insert_last(start);
  }
  else {
    while(count) {
      if(insert_number == first_number && insert_number <= last_number) {
        new1 = (struct node *)malloc(sizeof(struct node));
        printf("\n Enter Value Of Node Data : ");
        scanf("%d", &new1->data);
        new1->pre = temp;
        new1->next = temp->next;
        temp->next = new1;
        new1->next->pre = new1;
        last->next = NULL;
        printf("\nNode add successfully");
        temp = start;
        temp->data = temp->data+1;
        break;
      }
      else {
        temp = temp->next;
        count--;
      }
      first_number++;
    }
  }
}

void delete_first(struct node *temp) {
  struct node *temp1,*first_n;
  temp = start;
  first_n = temp->next;
  temp1 = first_n->next;
  temp->next = temp1;
  temp1->pre = temp;
  first_n->pre = NULL;
  first_n->next = NULL;
  //show_all_node(temp, temp1, first_n);
  temp = start;
  temp->data = temp->data-1;
  printf("\n Node Deleted");
}

void delete_last(struct node *temp) {
  last = last->pre;
  last->next = NULL;

  temp = start;
  temp->data = temp->data-1;
  printf("\n Node Deleted");
}

void delete_Node_number(struct node *temp) {
  struct node *temp1,*del_n;
  int count,
  j,
  num,
  f = 0;
  temp = start;
  count = temp->data;
  printf("\n Where you want to delete a node. Enter That Node Number : ");
  scanf("%d", &num);
  if(num > count) {
    printf("Enter between 1 to %d", count);
  }
  if(num == 1) {
    delete_first(start);
  }
  if(num == count) {
    delete_last(start);
  }
  for(j = 2; j <= count; j++) {
    if(num + 1 == j) {
      temp->next = temp1;
      temp1->pre = temp;
      del_n->pre = NULL;
      del_n->next = NULL;
      f = 1;
      break;
    }
    else {
      temp = temp->next;
      del_n = temp->next;
      temp1 = del_n->next;
    }
  }
  if(f == 1) {
    temp = start;
    temp->data = temp->data-1;
    printf("\n Node Deleted");
  }
}

void count(struct node *temp) {
  printf("\n Number of Node In Header Link List is %d \n", temp->data);
}