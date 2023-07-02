#include<stdio.h>
#include<stdlib.h>
#define TRUE 1
#define FALSE 0
struct btnode {
  int value;
  struct btnode *l;
  struct btnode *r;
}*root = NULL, *temp = NULL, *parent, *x, *xser;
void create();
void insert();
void delet(struct btnode **, int);
void del_search(struct btnode **, int, struct btnode **, struct btnode **, int *);
void inorder(struct btnode *t);
void preorder(struct btnode *t);
void postorder(struct btnode *t);
struct btnode *search_val(struct btnode *t);
void search_place(struct btnode *t);
int smallest(struct btnode *t);
int largest(struct btnode *t);
int flag = 1;
void main(){
  int ch, data;
  clrscr();
  printf("\n Opertion... ");
  printf("\n 1 - Insert an element into terr ");
  printf("\n 2 - Delete an element from the tree");
  printf("\n 3 - Inorder Traversal");
  printf("\n 4 - Preorder Traversal");
  printf("\n 5 - Postorder Traversal");
  printf("\n 6 - Search");
  printf("\n 7 - Minimum value");
  printf("\n 8 - maximum value");
  printf("\n 9 - Exit\n");
  while(1){
    printf("\nEnter your choice : ");
    scanf("%d", &ch);
    switch(ch){
      case 1:
      insert();
      break;
      case 2:
      printf("Enter the data to be deleted : ");
      scanf("%d", &data);
      //delet(&root, data);
      break;
      case 3:
      inorder(root);
      break;
      case 4:
      preorder(root);
      break;
      case 5:
      postorder(root);
      break;
      case 6:
      temp = search_val(root);
      if(temp != NULL)
        printf("\n The Node Value Is Present In The Tree");
      else
        printf("\nThe Node value is not present in the tree");
      break;
      case 7:
      printf("smallest value is %d", smallest(root));
      break;
      case 8:
      printf("Bigest value is %d", largest(root));
      break;
      case 9:
      exit(0);
      default:
      printf("Wrong value is %d",ch);
    }
  }
}
// To insert a node in the tree
void insert(){
  create();
  if(root == NULL)
    root = temp;
  else
    search_place(root);
}
// To create a node
void create(){
  int data;
  printf("Enter data of node to be inserted : ");
  scanf("%d", &data);
  temp = (struct btnode *)malloc(sizeof(struct btnode));
  temp->value = data;
  temp->l = temp->r = NULL;
}
//Function to search the appropriate position to insert the new node
void search_place(struct btnode *t){
  if((temp->value > t->value) && (t->r != NULL))//value more than root node value insert at right
	search_place(t->r);
  else if((temp->value > t->value) && (t->r == NULL))
	t->r = temp;
  else if((temp->value < t->value) && (t->l != NULL))//value less than root node value insert at  left
    search_place(t->l);
  else if((temp->value < t->value) && (t->l == NULL))
	t->l = temp;
}
//recusive fuction to perform inorder traversal of tree
void inorder(struct btnode *t){
  if(root == NULL){
    printf("No elements in a tree to display");
	return;
  }
  if(t->l != NULL)
	inorder(t->l);
  printf("%d", t->value);
  if(t->r != NULL)
	inorder(t->r);
}
//To find the preorder traversal
void preorder(struct btnode *t){ //Root->Left->Right
  if(root == NULL){
	printf("No elements in a tree to display");
	return;
  }
  printf("%d -> ", t->value);
  if(t->l != NULL)
	preorder(t->l);
  if(t->r != NULL)
	preorder(t->r);
}
//To find the postorder traversal 
void postorder(struct btnode *t){ //Left-Right-Root
  if(root == NULL){
	printf("No elements in a tree to display");
	return;
  }
  if(t->l != NULL)
	postorder(t->l);
  if(t->r != NULL)
	postorder(t->r);
  printf("%d -> ", t->value);
}
//to search Mode Value
struct btnode *search_val(struct btnode *t){
  struct btnode *temp;
  int key;
  printf("Which Node Value You want to search : ");
  scanf("%d",&key);
  temp = t;
  while(temp != NULL){
    if(temp->value == key)
      return(temp);
    else if(temp->value > key)
      temp = temp->l;
    else
      temp = temp->r;
  }
  return(NULL);
}

// To find the smallest element in the right sub tree
int smallest(struct btnode *t){
  x = t;
  if(t->l != NULL){
    x = t;
    return(smallest(t->l));
  }
  else
    return(t->value);
}

// To find the larest element in the left sub tree
int largest(struct btnode *t){
  if(t->r != NULL)
    return(largest(t->r));
  else
    return(t->value);
}

//To Detele node from the tree
void delet(struct btnode **root, int num){
  int found;
  struct btnode *parent, *x, *xser;
  if(*root == NULL){
    printf("\n Tree is Empty");
    return;
  }
  parent = x = NULL;
  del_search(root, num, &parent, &x, &found);
  if(found == FALSE){
    printf("Not Found, Node Not Deleted");
    return;
  }
  else{
    printf("Found, Node Deleted");
  }
  if(x->l != NULL && x->r != NULL){
    parent = x;
    xser = x->r;
    while(xser->l != NULL){
      parent = xser;
      xser = xser->l;
    }
    x->value = xser->value;
    x = xser;
  }
  if(x->l == NULL && x->r == NULL){
    if(parent->r == NULL)
      parent->r = x;
    else
      parent->l NULL;
    free(x);
    return;
  }
  if(x->l == NULL && x->r != NULL){
    if(parent->l == x)
      parent->l = x->r;
    else
      parent->r = x->r;
    free(x);
    return;
  }
  if(x->l != NULL && x->r == NULL){
    if(parent->l == x)
      parent->l = x->l;
    else
      parent->r = x->l;
    free(x);
    return;
  }
}

void del_search(struct btnode **root, int num, struct btnode **par, struct btnode **x, int *found){
  struct btnode *q;
  q = root;
  *found = FALSE;
  *par = NULL;
  while(q != NULL){
    /* if the node to be deleted is found */
    if(q->value == num){
      *found = TRUE;
      *x = q;
      return;
    }
    *par = q;
    if(q->value > num)
      q = q->l;
    else
      q = q->r;
  }
}