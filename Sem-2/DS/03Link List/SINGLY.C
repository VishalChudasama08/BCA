#include<stdio.h>
#include<conio.h>
#include<malloc.h>
#include<stdlib.h>
struct node
{
  int data;
  struct node *next;
}*start;
void insert();
void display();
void insert_beg();
void insert_last();
void insert_n_between();
void insert_node_v();
void del_first();
void del_last();
void del_between_node();
void del_between_value();
void Node_Value_Search();
void sort();
void count();

void main()
{
  int ch=1;
  do
  {
    while(ch>=1 && ch<=13)
    {
      clrscr();
      printf("\n 1. Insert");
      printf("\n 2. Display");
      printf("\n 3. insert_First");
      printf("\n 4. insert_last");
      printf("\n 5. insert_Node_Between");
      printf("\n 6. Insert_Node_After_Value");
      printf("\n 7. Delete_First");
      printf("\n 8. Delete_last");
      printf("\n 9. Delete_Node_Number");
      printf("\n10. Delete_Value_of_Node");
      printf("\n11. Count_Node");
      printf("\n12. Node_Value Search");
      printf("\n13. Sort");
      printf("\n14. End");
      printf("\nSelect : ");
      scanf("%d",&ch);
      switch(ch)
      {
        case 1:
          start=NULL;
          insert();
          break;
        case 2:
          display();
          break;
        case 3:
          insert_beg();
          break;
        case 4:
          insert_last();
          break;
        case 5:
          insert_n_between();
          break;
        case 6:
          insert_node_v();
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
        {
          printf("\nEnd");
          exit(0);
        }
      }
      getch();
    }
  }while(ch>=1 && ch<=14);
  getch();
}

void insert()
{
  char ch='Y';
  while (ch=='y'||ch=='Y')
  {
    struct node *new_node,*current;
    new_node=(struct node *)malloc(sizeof(struct node));
    printf("\nEnter the data : ");
    scanf("%d",&new_node->data);
    new_node->next=NULL;
    if(start==NULL)
    {
      start=new_node;
      current=new_node;
    }
    else
    {
      current->next=new_node;
      current=new_node;
    }
    printf("\nDo you want to create another : ");
    ch=getche();
  }
}

void display()
{
  struct node *temp;
  temp=start;
  printf("\n Display\n");
  if (temp==NULL)
  {
    printf("\n No Linked List Crated");
    exit(0);
  }
  else
  {
    while(temp!=NULL)
    {
      printf("\n %d",temp->data);
      temp=temp->next;
    }
    printf("\n");
  }
}

void insert_beg()
{
  struct node *new_node;
  new_node=(struct node *)malloc(sizeof(struct node));
  if(new_node == NULL)
  {
    printf("\nFailed to Allocate Memory");
    exit(0);
  }
  printf("nEnter the data : ");
  scanf("%d",&new_node->data);
  new_node->next=NULL;
  if(start==NULL)
  {
    start=new_node;
  }
  else
  {
    new_node->next=start;
    start=new_node;
  }
}

void insert_last()
{
  struct node *new_node,*temp;
  new_node=(struct node *)malloc(sizeof(struct node));
  if(new_node == NULL)
  {
    printf("nFailed to Allocate Memory");
    exit(0);
  }
  printf("nEnter the data : ");
  scanf("%d",&new_node->data);
  new_node->next=NULL;
  if(start==NULL)
  {
    start=new_node;
    temp=new_node;
  }
  else
  {
    temp = start;
    while(temp->next!=NULL)
    {
      temp = temp->next;
    }
    temp->next = new_node;
  }
}

void insert_n_between()
{
  int i=1,n,count=0,f=0;
  struct node *new_node,*temp;
  new_node=(struct node *)malloc(sizeof(struct node));
  if(new_node == NULL)
  {
    printf("\nFailed to Allocate Memory");
    exit(0);
  }
  printf("\nEnter Node Number ");
  scanf("%d",&n);
  printf("nEnter the data : ");
  scanf("%d",&new_node->data);
  new_node->next=NULL;
  if(start==NULL)
  {
    start=new_node;
  }
  else
  {
    temp= start;
    while(temp!=NULL)
    {
      count++;
      temp=temp->next;
    }
    temp=start;
    for(i=1;i<=count;i++)
    {
      if(i==n)
      {
        new_node->next=temp->next;
        temp->next=new_node;
        f=1;
      }
      temp=temp->next;
    }
  }
  if(f==0)
  printf("\n Invalid Node Number");
}

void insert_node_v()
{
  int i=1,n,count=0,f=0;
  struct node *new_node,*temp;
  new_node=(struct node *)malloc(sizeof(struct node));
  if(new_node == NULL)
  {
    printf("nFailed to Allocate Memory");
    exit(0);
  }
  printf("\nEnter Number ");
  scanf("%d",&n);
  printf("nEnter the data : ");
  scanf("%d",&new_node->data);
  new_node->next=NULL;
  if(start==NULL)
  {
    start=new_node;
  }
  else
  {
    temp= start;
    while(temp!=NULL)
    {
      count++;
      temp=temp->next;
    }
    temp=start;
    for(i=1;i<=count;i++)
    {
      if(temp->data==n)
      {
        new_node->next=temp->next;
        temp->next=new_node;
        f=1;
        printf("\n Node Added");
      }
      temp=temp->next;
    }
  }
  if(f==0)
  printf("\n Value is Not Found");
}

void del_first()
{
  struct node *temp;
  temp = start;
  if (temp ==NULL)
  {
    printf("Link List is Empty");
    exit(0);
  }
  start = start->next;
  free(temp);
  printf("\nThe Element deleted Successfully ");
}

void del_last()
{
  struct node *temp,*pre;
  temp=start;
  if(temp==NULL)
  {
    printf("No Any Record In Link List");
    exit(0);
  }
  else
  {
    temp=start;
    while(temp->next!=NULL)
    {
      pre=temp;
      temp=temp->next;
    }
    pre->next=NULL;
    free(temp);
  }
  printf("\n Last Node Deleted");
}

void del_between_node()
{
  struct node *temp,*pre;
  int num,co=1,f=0;
  printf("\n Which Node You Want To Delete : ");
  scanf("%d",&num);
  temp=start;
  while(temp!=NULL)
  {
    if(num==1)
    {
      start=start->next;
      free(temp);
      f=1;
      printf("\n Node Deleted");
      break;
    }
    else if(co==num)
    {
      pre->next=temp->next;
      free(temp);
      f=1;
      printf("\n Node Deleted");
      break;
    }
    else
    {
      pre=temp;
      temp=temp->next;
    }
    co++;
  }
  if(f==0)
  printf("\n Invalid Node Number");
}

void del_between_value()
{
  struct node *temp,*pre;
  int num,co=1,f=0;
  printf("\n Which Value You Want To Delete : ");
  scanf("%d",&num);
  pre=start;
  temp=start->next;
  while(temp!=NULL)
  {
    if(temp->data==num)
    {
      pre->next=temp->next;
      free(temp);
      f=1;
      printf("\n Node Deleted");
      break;
    }
    else
    {
      temp=temp->next;
      pre=pre->next;
    }
    co++;
  }
  if(f==0)
  printf("\n Invalid Node Number");
}

void Node_Value_Search()
{
  struct node *temp;
  int num,f=0,co=0;
  printf("\n Which Value You Want To Search : ");
  scanf("%d",&num);
  temp=start;
  if(temp==NULL)
  {
    printf("No Any Record In Link List");
    exit(0);
  }
  else
  {
    while(temp!=NULL)
    {
      if(temp->data==num)
      {
        printf("\n Search is Succefull");
        printf("Position Of Node is %d", co);
        f=1;
        break;
      }
      else
      {
        temp=temp->next;
      }
      co++;
    }
  }
  if(f==0)
  printf("\n Invalid Node Number");

}

void sort()
{
  struct node *temp,*new,*curr;
  for(new=start;new->next!=NULL;new=new->next)
  {
    for(curr=new->next;curr!=NULL;curr=curr->next)
    {
      if(new->data>curr->data)
      {
	temp=new->data;
        new->data=curr->data;
	curr->data=temp;
        
      }
    }
  }
  printf("Sorting Completed");
}

void count()
{
  struct node *temp;
  int count=0;
  temp=start;
  if(temp!=NULL)
  {
    while(temp!=NULL)
    {
      count++;
      temp=temp->next;
    }
    printf("There are %d Nodes",count);
  }
  else
  {
    printf("\nNo Any Value in Node");
  }
}