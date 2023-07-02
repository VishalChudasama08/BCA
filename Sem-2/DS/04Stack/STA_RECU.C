#include<stdio.h>
#include<stdlib.h>
struct node{
    int a;
    struct node *next;
};
void generate(struct node **);
void display(struct node *);
void stack_reverse(struct node **, struct node **);
void delete(struct node **);
void main(){
    struct node *top = NULL;
    clrscr();
    generate(&top);
    printf("\n The sequence of contents in stack \n");
    display(top);
    printf("\n Inversing the contents of the stack\n");
    if(top != NULL){
        stack_reverse(&top, &(top->next));
    }
    // display(top);
    printf("\n The contents in stack sfter reversal\n");
    display(top);
    delete(&top);
    getch();
}

void stack_reverse(struct node **top, struct node **top_next){
    struct node *temp;
    if(*top_next != NULL){
        temp = (*top_next)->next;
        (*top_next)->next = (*top);
        *top = *top_next;
        *top_next = temp;
        stack_reverse(top, top_next);
    }
}

void display(struct node *top){
    if(top != NULL){
        printf("%d", top->a);
        display(top->next);
    }
}

void generate(struct node **top){
    int num, i;
    struct node *temp;
    printf("enter length of list : ");
    scanf("%d", &num);
    for(i = num; i > 0; i--){
        temp = (struct node *)malloc(sizeof(struct node));
        temp->a = i;
        if(*top == NULL){
            *top = temp;
            (*top)->next = NULL;
        }
        else{
            temp->next =*top;
            *top = temp;
        }
    }
}

void delete(struct node **top){
    struct node *temp;
    while(*top != NULL){
        temp = *top;
        *top = (*top)->next;
        free(temp);
    }
}