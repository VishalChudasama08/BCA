//circular Queue link list
#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
};
struct node *head = NULL, *x, *y, *z;
void create();
void ins_at_beg();
void ins_at_pos();
void del_at_beg();
void del_at_pos();
void traverse();
void search();
void sort();
void updata();
void rev_traverse(struct node *p);
void main()
{
    int ch;
    while (1)
    {
        clrscr();
        printf("\n 1. Creation");
        printf("\n 2. Insertion At Beginning");
        printf("\n 3. Insertion At Remaining");
        printf("\n 4. Deletion At Beginning");
        printf("\n 5. Deletion At Remaining");
        printf("\n 6. Display");
        printf("\n 7. Search");
        printf("\n 8. Sort");
        printf("\n 9. Update");
		printf("\n10. Reverse Display");
		printf("\n11. Exit");
		printf("\n Enter Your choice : ");
        scanf("%d", &ch);
        switch (ch)
        {
        case 1:
            create();
            break;
        case 2:
            ins_at_beg();
            break;
        case 3:
            ins_at_pos();
            break;
        case 4:
            del_at_beg();
            break;
        case 5:
            del_at_pos();
            break;
        case 6:
            traverse();
            break;
        case 7:
            search();
            break;
        case 8:
            sort();
            break;
        case 9:
            updata();
            break;
        case 10:
            rev_traverse(head);
            break;
        case 11:
            exit(0);
        }
        getch();
    }
}
// create a new circular innked list
void create()
{
    char ch = 'y';
    while (ch == 'y' || ch == 'Y')
    {
        x = (struct node *)malloc(sizeof(struct node));
        printf("\n Enter the data : ");
        scanf("%d", &x->data);
        if (head == NULL)
        {
            head = x;
            y = x;
            y->next = x;
        }
        else
        {
            y->next = x;
            x->next = head;
            y = x;
        }
        printf("\n If You Want To More Nodes ? (y/n) : ");
        ch = getche();
    }
}
// insert in beginning of the link list
void ins_at_beg()
{
    x = head;
    y = (struct node *)malloc(sizeof(struct node));
    printf("\n Enter the data : ");
    scanf("%d", &y->data);
    while (x->next != head)
    {
        x = x->next;
    }
    x->next = y;
	  y->next = head;
    head = y;
}
// Insert an element at any position the lost
void ins_at_pos()
{
	  struct node *ptr;
    int c = 1, pos, count = 1;
    y = (struct node *)malloc(sizeof(struct node));
    if (head == NULL)
    {
        printf("can not an element at this place");
    }
    printf("\n Enter the data : ");
    scanf("%d", &y->data);
	  printf("\n Enter the position to be inserted : ");
    scanf("%d", &pos);
    x = head;
    ptr = head;
    while (ptr->next != head)
    {
        count++;
        ptr = ptr->next;
    }
    count++;
    if (pos > count)
    {
        printf("Out of bound");
        return;
    }
    while (c < pos)
    {
        z = x;
        x = x->next;
        c++;
    }
    y->next = x;
    z->next = y;
}
// Delete an element at any beginning of the list
void del_at_beg()
{
    if (head == NULL)
        printf("\n List is empty");
    else
    {
        x = head;
        y = head;
        while (x->next != head)
        {
            x = x->next;
        }
        head = y->next;
        x->next = head;
        free(y);
    }
}
// Delete an element at any position the list
void del_at_pos()
{
    int c = 1, pos;
    if (head == NULL)
        printf("\n List is empty");
    else
    {
		printf("\n Enter the position to be deleted : ");
        scanf("%d", &pos);
        x = head;
        while (c < pos)
        {
            y = x;
            x = x->next;
            c++;
        }
        y->next = x->next;
        free(x);
    }
}
// display the elements in the list
void traverse()
{
    if (head == NULL)
        printf("\n List is empty");
    else
    {
        x = head;
        while (x->next != head)
        {
			printf("%d\n", x->data);
            x = x->next;
        }
		printf("%d\n", x->data);
    }
}
// search an element in the list
void search()
{
    int search_val, count = 0, flag = 0;
    printf("\n Enter the element to search\n");
    scanf("%d", &search_val);
    if (head == NULL)
        printf("\n List is empty nothing to search");
    else
    {
        x = head;
        while (x->next != head)
        {
            if (x->data == search_val)
            {
                printf("\n the element is found at %d", count);
                flag = 1;
                break;
            }
            count++;
            x = x->next;
        }
        if (x->data == search_val)
        {
	    printf("element found at position %d. ", count);
        }
        if (flag == 0)
        {
            printf("\nelement not found");
        }
    }
}
// sort the list in ascending order
void sort()
{
    struct node *ptr, *nxt;
    int temp;
    if (head == NULL)
    {
        printf("empty nexted list");
    }
    else
    {
        ptr = head;
        while (ptr->next != head)
        {
            nxt = ptr->next;
            while (nxt != head)
            {
                if (nxt != head)
                {
					if (ptr->data > nxt->data)
                    {
                        temp = ptr->data;
						ptr->data = nxt->data;
                        nxt->data = temp;
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
}
// updata an element at any position the list
void updata()
{
    struct node *ptr;
    int search_val, replace_val, flag = 0;
    ptr = head;
    if (head == NULL)
    {
        printf("\n empty list");
    }
    else
    {
		printf("Enter the value to be edited : ");
        scanf("%d", &search_val);
        fflush(stdin);
		printf("enter the value to be replace : ");
	scanf("%d", &replace_val);
	while(ptr != NULL){
	    if (ptr->data == search_val)
	    {
		ptr->data = replace_val;
		flag = 1;
		break;
	    }
	    ptr = ptr->next;
	}
    }

    /*if (ptr->data == search_val)
    {
		ptr->data = replace_val;
        flag = 1;
    } */

    if (flag == 1)
    {
        printf("\nUpdata Successful");
    }
    else
    {
        printf("\nUpdata not successful");
    }
}
// Display the element of the list in reverse order
void rev_traverse(struct node *p)
{
    int i = 0;
    if (head == NULL)
    {
        printf("empty nexted list");
    }
    else
    {
        if (p->next != head)
        {
            i = p->data;
			rev_traverse(p->next);
			printf("%d\n", i);
        }
        if (p->next == head)
        {
			printf("%d\n", p->data);
        }
    }
}