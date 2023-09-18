/* write a c++ source code to show the use of the single inheritance */
#include<iostream.h>
#include<conio.h>
class b{
	int a;
	public:
	int b;
	void get_ab();
	int get_a(void);
	void show_a(void);
};
class d:public b{
	int c;
	public:
	void mul(void);
	void display(void);
};
void b::get_ab(void){
	a=5;
	b=10;
}
int b::get_a(void){
	return a;
}
void b::show_a(){
	cout<<"a= "<<a<<endl;
}
void d::mul(){
	c=b*get_a();
}
void d::display(){
	cout<<"a= "<<get_a()<<endl;
	cout<<"b= "<<b<<endl;
	cout<<"c= "<<c<<endl;
}
void main(){
	d d1;
	clrscr();
	d1.get_ab();
	d1.mul();
	d1.show_a();
	d1.display();
	d1.b=20;
	d1.mul();
	d1.display();
	getch();
}
