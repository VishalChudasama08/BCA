/* write a c++ source code to show the use of the multiple constructors in class */
#include<iostream.h>
#include<conio.h>
class complex{
	float x,y;
	public:
	complex(){ } //constructor with no argument
	complex(float a){ //constructor with one argument
		x=y=a;
	}
	complex(float real, float imag){ //contructor with two argument
		x=real;
		y=imag;
	}
	friend complex sum(complex, complex);
	friend void show(complex);
};
complex sum(complex c1, complex c2){ //friend function
	complex c3;
	c3.x= c1.x + c2.x;
	c3.y= c1.y + c2.y;
	return(c3);
}
void show(complex c){
	cout<<c.x<<" + "<<c.y<<endl;
}
void main(){
	complex a(2.7, 3.5); //define and initialize
	complex b(1.6);
	complex c;
	clrscr();
	c=sum(a,b);
	cout<<"a = ";
	show(a);
	cout<<"b = ";
	show(b);
	cout<<"c = ";
	show(c);
	//another way to give initial values(second method)
	complex p,q,r; //define p,q and r
	p=complex(2.5, 3.9);
	q=complex(1.6, 2.5);
	r=sum(p,q);
	cout<<endl;
	cout<<"p = ";
	show(p);
	cout<<"q = ";
	show(q);
	cout<<"r = ";
	show(r);
	getch();
}
