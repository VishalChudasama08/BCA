/* write a c++ sorce code to show the use of the copy contructor */
#include<iostream.h>
#include<conio.h>
class code{
	int id;
	public:
	code(){ }
	code(int a){
		id=a;
	}
	code(code &x){
		id=x.id;
	}
	void display(void){
		cout<<id;
	}
};
void main(){
	code a(100); //object a is created and initialized
	code b(a); //copy constructor called
	code c=a; //copy constructor again called
	code d;
	clrscr();
	cout<<"\nid of a: ";
	a.display();
	cout<<"\nid of b: ";
	b.display();
	cout<<"\nid of c: ";
	c.display();
	cout<<"\nid of d: ";
	d.display();
	getch();
}