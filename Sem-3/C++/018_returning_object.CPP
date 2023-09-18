/* write a c++ soure code to show the use of the returning object */
#include<iostream>
#include<conio.h>
using namespace std;
class copmlex{
	float x, y;
	public:
	void input(float real, float imag){
		x=real;
		y=imag;
	}
	friend copmlex sum(copmlex, copmlex);
	void show(copmlex);
};
copmlex sum(copmlex c1, copmlex c2){
	copmlex c3;
	c3.x = c1.x + c2.x;
	c3.y = c1.y + c2.y;
	return(c3);
}
void copmlex::show(copmlex c){
	cout<<c.x<<" + " <<c.y<<endl;
}
void main(){
	copmlex a,b,c;
	clrscr();
	a.input(3.1, 5.65);
	b.input(2.75, 1.2);
	c=sum(a,b); //c=a+b;
	cout<<"a =";
	a.show(a);
	cout<<"b =";
	b.show(b);
	cout<<"c =";
	c.show(c);
	getch();
}