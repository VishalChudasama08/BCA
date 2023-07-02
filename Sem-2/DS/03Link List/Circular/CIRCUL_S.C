#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node {
  int data;
  struct node *next;
}*start;
void create();
void display();
void insert_first();
void insert_last();
void delete_first();
void delete_last();
void rev_traverse(struct node *);
void append();
void search();
void sort();
void count();

void main() {
  int ch = 1;
  do
  {
    while(ch >= 1 && ch <= 11) {
      printf("\n 1. Create");
      printf("\n 2. Display");
      printf("\n 3. insert First");
      printf("\n 4. insert last");
      printf("\n 5. Delete First");
      printf("\n 6. Delete Last");
      printf("\n 7. rev_traverse");
      printf("\n 8. Sort");
      printf("\n 9. Append");
      printf("\n10. Search");
      printf("\n11. Count");
      printf("\n12. End");
      printf("\n Select : ");
      scanf("%d", &ch);
      switch(ch) {
        case 1:
        create();
        break;
        case 2:
        display();
        break;
        case 3:
        insert_first();
        break;
        case 4:
        insert_last();
        break;
        case 5:
        delete_first();
        break;
        case 6:
        delete_last();
        break;
        case 7:
        rev_traverse(start);
        break;
        case 8:
        sort();
        break;
        case 9:
        append();
        break;
        case 10:
        search();
        break;
        case 11:
        count();
        break;
        case 12:
        {
          printf("\nEnd");
          exit(0);
        }
      }
      getch();
    }
  }while(ch >= 1 && ch <= 12);
  getch();
}

void create() {
  char ch = 'Y';
  while (ch == 'y' || ch == 'Y') {
    struct node *new_node,
    *temp;
    new_node = (struct node *)malloc(sizeof(struct node));
    printf("\nEnter the data : ");
    scanf("%d", &new_node->data);
    new_node->next = NULL;
    if(start == NULL) {
      start = new_node;
      start->next = start;
    }
    else
    {
      temp = start;
      do
      {
        temp = temp->next;
      }while(temp->next != start);
      temp->next = new_node;
      new_node->next = start;
    }
    printf("\nDo you want to creat another (y/n) : ");
    ch = getche();
  }
}

void display() {
  struct node *temp;
  temp = start;
  printf("\n Display\n");
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    do
    {
      printf("\n %d", temp->data);
      temp = temp->next;
    }while(temp != start);
  }
}

void insert_first() {
  struct node *new_node,
  *temp;
  temp = start;
  new_node = (struct node *)malloc(sizeof(struct node));
  printf("\nEnter the data : ");
  scanf("%d", &new_node->data);
  new_node->next = NULL;
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    new_node->next = start;
    do
    {
      temp = temp->next;
    }while(temp->next != start);
    temp->next = new_node;
    start = new_node;
  }
}

void insert_last() {
  struct node *new_node,
  *temp;
  temp = start;
  new_node = (struct node *)malloc(sizeof(struct node));
  printf("\nEnter the data : ");
  scanf("%d", &new_node->data);
  new_node->next = NULL;
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    do
    {
      temp = temp->next;
    }while(temp->next != start);
    temp->next = new_node;
    new_node->next = start;
  }
}

void delete_first() {
  struct node *temp1,
  *temp;
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    temp = start;
    temp1 = start;
    while (temp->next != start) {
      temp = temp->next;
    }
    start = temp1->next;
    temp->next = start;
    free(temp1);
  }
}

void delete_last() {
  struct node *temp1,
  *temp;
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    temp = start;
    while (temp->next != start) {
      temp1 = temp;
      temp = temp->next;
    }
    temp1->next = start;
    free(temp);
  }
}

void rev_traverse(struct node *temp) {
  int i = 0;
  if (start == NULL) {
    printf("empty linked list");
    exit(0);
  }
  else
  {
    if (temp->next != start) {
      i = temp->data;
      rev_traverse(temp->next);
      printf("\n%d", i);
    }
    if (temp->next == start) {
      printf(" %d", temp->data);
    }
  }
}

void sort() {
  struct node *ptr,*nxt;
  int i;
  if (start == NULL) {
    printf("empty linkedlist");
    exit(0);
  }
  else
  {
    ptr = start;
    while (ptr->next != start) {
      nxt = ptr->next;
      while (nxt != start) {
        if (nxt != start) {
          if (ptr->data > nxt->data) {
            i = ptr->data;
            ptr->data = nxt->data;
            nxt->data = i;
          }
        }
        else
        {
          break;
        }
        nxt = nxt->next;
      }
      ptr = ptr->next;
    }
  }
  printf("\n Soted Linked List");
}

void search() {
  struct node *temp;
  int search_val,count = 0,flag = 0;
  printf("\nenter the element to search\n");
  scanf("%d", &search_val);
  if (start == NULL) {
    printf("\nList is empty nothing to search");
    exit(0);
  }
  else
  {
    temp = start;
    while (temp->next != start) {
      if (temp->data == search_val) {
        printf("\nthe element is found at %d", count);
        flag = 1;
        break;
      }
      count++;
      temp = temp->next;
    }
    if (temp->data == search_val) {
      printf("element found at postion %d", count);
    }
    if (flag == 0) {
      printf("\nelement not found");
    }
  }
}

void append() {
  struct node *temp;
  int search_val,replace_val,flag = 0;
  if (start == NULL) {
    printf("\n empty list");
  }
  else
  {
    printf("enter the value to be edited\n");
    scanf("%d", &search_val);
    fflush(stdin);
    printf("enter the value to be replace\n");
    scanf("%d", &replace_val);
    temp = start;
    while (temp->next != start) {
      if (temp->data == search_val) {
        temp->data = replace_val;
        flag = 1;
        break;
      }
      temp = temp->next;
    }
    if (temp->data == search_val) {
      temp->data = replace_val;
      flag = 1;
    }
    if (flag == 1) {
      printf("\nUpdate sucessfully");
    }
    else
    {
      printf("\n Update not successful");
    }
  }
}

void count() {
  struct node *temp;
  int count = 1;
  if (start == NULL) {
    printf("\nList is empty nothing to search");
    exit(0);
  }
  else
  {
    temp = start;
    while (temp->next != start) {
      count++;
      temp = temp->next;
    }
  }
  printf("Linked List Node is %d \n", count);
}