/* write a c++ source code to show the use of the operator overloading */
#include<iostream.h>
#include<conio.h>
class space{
	int x,y,z;
	public:
	void getdate(int a, int b,int c);
	void display(void);
	void operator-();
};
void space::getdate(int a, int b, int c){
	x=a;
	y=b;
	z=c;
}
void space::display(void){
	cout<<x<<", ";
	cout<<y<<", ";
	cout<<z<<endl;
}
void space::operator-(){
	x=-x;
	y=-y;
	z=-z;
}
void main(){
	space s;
	clrscr();
	s.getdate(10, -20, 30);
	cout<<"s: ";
	s.display();
	-s; //activates operator -() function
	cout<<"s: ";
	s.display();
	getch();
}