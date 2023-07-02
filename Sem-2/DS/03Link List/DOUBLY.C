#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node
{
  struct node *pre;
  int data;
  struct node *next;
}*start, *last;
void create();
void display();
void rev_display();
void insert_first();
void insert_last();
void insert_node_number();
void Insert_Node_After_Value();
void del_first();
void del_last();
void del_between_node();
void del_between_value();
void Node_Value_Search();
void sort();
void count();
int main() {
  int ch = 1;
  do
  {
    while(ch >= 1 && ch <= 14) {
      //clrscr();
      printf("\n 1. Create");
      printf("\n 2. Display");
      printf("\n 3. insert_First");
      printf("\n 4. insert_last");
      printf("\n 5. insert_node_number");
      printf("\n 6. Insert_Node_After_Value");
      printf("\n 7. Delete_First");
      printf("\n 8. Delete_last");
      printf("\n 9. Delete_Node_Number");
      printf("\n10. Delete_Value_of_Node");
      printf("\n11. Count_Node");
      printf("\n12. Node_Value Search");
      printf("\n13. Sort");
      printf("\n14. Reverse Display");
      printf("\n15. End");
      printf("\nSelect : ");
      scanf("%d", &ch);
      switch(ch) {
        case 1:
          start = NULL;
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
          insert_node_number();
          break;
        case 6:
          Insert_Node_After_Value();
          break;
        case 7:
          del_first();
          break;
        case 8:
          del_last();
          break;
        case 9:
          del_between_node();
          break;
        case 10:
          del_between_value();
          break;
        case 11:
          count();
          break;
        case 12:
          Node_Value_Search();
          break;
        case 13:
          sort();
          break;
        case 14:
          rev_display();
          break;
        case 15:
        {
          printf("\nEnd");
          exit(0);
        }
      }
      getch();
    }
  }while(ch >= 1 && ch <= 15);
  getch();
}
void create() {
  char ch = 'Y';
  while (ch == 'y' || ch == 'Y') {
    struct node *new_node,
    *current;
    new_node = (struct node *)malloc(sizeof(struct node));
    printf("\nEnter the data : ");
    scanf("%d", &new_node->data);
 
    new_node->pre = NULL;
    new_node->next = NULL;
    if(start == NULL) {
      start = new_node;
      current = new_node;
      last = new_node;
    }
    else
    {
      new_node->pre = current;
      current->next = new_node;
      current = new_node;
      last = new_node;
    }
    printf("\nDo you want to create another : ");
    ch = getche();
  }
}

void display() {
  struct node *temp;
  temp = start;
  printf("\n Display\n");
  if (temp == NULL) {
    printf("\n No Linked List Cratted");
    exit(0);
  }
  else
  {
    while(temp != NULL) {
      printf("\n %d", temp->data);
      temp = temp->next;
    }
    printf("\n");
  }
}

void rev_display() {
  struct node *temp,*temp1;
  temp = last;
  printf("\n Display\n");
  if (temp == NULL) {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    while(temp != NULL) {
      printf("\n%d", temp->data);
      temp = temp->pre;
    }
  }
}

void insert_first() {
  struct node *new_node;
  int value;
  new_node = (struct node *)malloc(sizeof(struct node));
  printf("\n Enter Value in node Data : ");
  scanf("%d", &value);
  new_node->pre = NULL;
  new_node->data = value;
  new_node->next = NULL;
  if(start == NULL) {
    start = new_node;
    last = new_node;
  }
  else
  {
    new_node->next = start;
    start->pre = new_node;
    start = new_node;
    printf("\n Node Added");
  }
}

void insert_last() {
  struct node *new_node,
  *temp;
  int value;
  new_node = (struct node *)malloc(sizeof(struct node));
  if(new_node == NULL) {
    printf("\nFailed to Allocate Memory");
    exit(0);
  }
  printf("\nEnter the data of Node: ");
  scanf("%d", &value);
  new_node->pre = NULL;
  new_node->data = value;
  new_node->next = NULL;
  if(start == NULL) {
    start = new_node;
    last = new_node;
  }
  else
  {
    temp = start;
    while(temp->next != NULL) {
      temp = temp->next;
    }
    new_node->pre = temp;
    temp->next = new_node;
    last = new_node;
  /* last->next= new_node;
    new_node->pre = last;
    last=new_node; */
    printf("\n Node Added");
  }
}

void insert_node_number() {
  int i = 1,n,count = 0,f = 0,value;
  struct node *new_node,*temp,*temp1;
  new_node = (struct node *)malloc(sizeof(struct node));
  if(new_node == NULL) {
    printf("\nnFailed to Allocate Memory");
    exit(0);
  }
  printf("\nEnter Node Number Which you Want Add after : ");
  scanf("%d", &n);
  printf("\nEnter the Value of Node : ");
  scanf("%d", &value);
  new_node->pre = NULL;
  new_node->data = value;
  new_node->next = NULL;
  if(start == NULL) {
    start = new_node;
    last = new_node;
  }
  else
  {
    temp = start;
    while(temp != NULL) {
      count++;
      temp = temp->next;
    }
    if(n == count) {
      last->next = new_node;
      new_node->pre = last;
      last = new_node;
      f = 1;
      printf("\n Node Added");
    }
    temp = start;
    for(i = 1; i < count; i++) {
      if(i == n) {
        temp1 = temp->next;
        temp->next = new_node;
        new_node->pre = temp;
        new_node->next = temp1;
        temp1->pre = new_node;
        f = 1;
        printf("\n Node Added");
        break;
      }
      temp = temp->next;
    }
  }
  if(f == 0)
  printf("\n Invalid Node Number");
}

void Insert_Node_After_Value() {
  int i,n,count = 0,f = 0,value;
  struct node *new_node,*temp,*temp1;
  new_node = (struct node *)malloc(sizeof(struct node));
  if(new_node == NULL) {
    printf("nFailed to Allocate Memory");
    exit(0);
  }
  
  printf("\nEnter value of Node Which you Want Add after :");
  scanf("%d", &n);
  printf("nEnter the data : ");
  scanf("%d", &value);
  new_node->pre = NULL;
  new_node->data = value;
  new_node->next = NULL;
  if(start == NULL) {
    start = new_node;
    last = new_node;
  }
  else
  {
    temp = start;
    while(temp != NULL) {
      count++;
      temp = temp->next;
    }
    if(last->data == n) {
      last = new_node;
    }
    temp = start;
    for(i = 1; i <= count; i++) {
      if(temp->data == n) {
        temp1 = temp->next;
        temp->next = new_node;
        new_node->pre = temp;
        new_node->next = temp1;
        temp1->pre = new_node;
        f = 1;
        printf("\n Node Added");
        break;
      }
      temp = temp->next;
    }
  }
  if(f == 0)
  printf("\n Value is Not Found");
}

void del_first() {
  struct node *temp;
  temp = start;
  if(temp == NULL) {
    printf("\n linked List empty");
    exit(0);
  }
  start = start->next;
  temp->next = NULL;
  start->pre = NULL;
  free(temp);
  printf("\nThe Element deleted Successfully ");
}

void del_last() {
  struct node *temp,*temp1;
  /* temp=start;
  if(temp== NULL)
  {
    printf("Linklist Is Empty");
    exit(0);
  }
  else
  {
    temp1= start ;
    temp = start->next;
    while(temp->next != NULL)
    {
      temp1 = temp;
      temp = temp->next;
    }
    temp1->next = NULL;
  }*/
  temp = last;
  last = last->pre;
  last->next = NULL;
  temp->pre = NULL;
  free(temp);
  printf("\nDeleted deleted : ");
}

void del_between_node() {
  int num,co = 0,f = 0,i;
  struct node *temp,*temp1;
  printf("\n Which Node You Want To Delete : ");
  scanf("%d", &num);
  temp1 = start;
  temp = start->next;
  while(temp1 != NULL) {
    co++;
    temp1 = temp1->next;
  }
  temp = start;
  for(i = 1; i <= co; i++) {
    if(num == 1) {
      del_first();
      f = 1;
      break;
    }
    else if(i == num) {
      temp1->next = temp->next;
      temp->next->pre = temp1;
      f = 1;
      printf("Node Delete");
      break;
    }
    else {
      temp1 = temp;
      temp = temp->next;
    }
  }
  /* while(temp!=NULL)
  {
    if((co+1)==num)
    {
      if(num==0) {
        del_first();
        f=1;
        break;
      }
      else {
        temp1->next=temp->next;
        temp->next->pre=temp1->next;
        free(temp);
        f=1;
        printf("\n Node Deleted");
        break;
      }
    }
    else
    {
      temp=temp->next;
      temp1=temp1->next;
    }
    co++;
  } */
  if(f == 0)
  printf("\n Invalid Node Number");
}

void del_between_value() {
  struct node *temp,*temp1;
  int num,co = 0,f = 0;
  printf("\n Which Node value You Want To Delete : ");
  scanf("%d", &num);
  temp1 = start;
  temp = start->next;
  while(temp != NULL) {
    if(temp->data == num) {
      temp1->next = temp->next;
      temp->next->pre = temp1->next;
      free(temp);
      f = 1;
      printf("\n Node Deleted");
      break;
    }
    else{
      temp = temp->next;
      temp1 = temp1->next;
    }
    co++;
  }
  if(f == 0)
  printf("\n Invalid Node Number");
}
void Node_Value_Search() {
  struct node *temp;
  int num,f = 0,co = 0;
  printf("\n Which Value You Want To Search : ");
  scanf("%d", &num);
  temp = start;
  if(temp == NULL) {
    printf("No Any Record In Link List");
    exit(0);
  }
  while(temp != NULL) {
    if(temp->data == num) {
      printf("\n Search is Succefull");
      printf("Position Of Node is %d", co);
      f = 1;
      break;
    }
    else {
      temp = temp->next;
    }
    co++;
  }
  if(f == 0)
  printf("\n Invalid Node Number");
}

void count() {
  struct node *temp;
  int count = 0;
  temp = start;
  if(temp != NULL) {
    while(temp != NULL) {
      count++;
      temp = temp->next;
    }
    printf("\nThere are %d Nodes", count);  
  }
  else{
    printf("\nNo Any Value in Node");
  }
}

void sort() {
  struct node *new,*curr;
  int temp;
  new = start;
  for(; new->next != NULL; new = new->next) {
    for(curr = new->next; curr != NULL; curr = curr->next) {
      if(new->data > curr->data) {
        temp = new->data;
        new->data = curr->data;
        curr->data = temp;
      }
    }
  }
  printf("Sorting Completed");
}