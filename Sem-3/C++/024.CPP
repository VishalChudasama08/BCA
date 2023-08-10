/* write a c++ source code to show the of the overloading binary + operator */
#include<iostream.h>
#include<conio.h>
class complex{
	float x,y;
	public:
	complex(){ }
	complex(float real, float imag){
		x=real;
		y=imag;
	}
	complex operator +(complex);
	void display(void);
};
complex complex::operator+(complex c){
	complex temp;
	temp.x = x + c.x;
	temp.x = y + c.y;
	return(temp);
}
void complex::display(void){
	cout<<x<<" + "<<y<<endl;
}
void main(){
	complex c1,c2,c3;
	c1=complex(2.5, 3.5);
	c2=complex(1.6, 2.7);
	clrscr();
	c3=c1+c2;
	cout<<"c1 = ";
	c1.display();
	cout<<"c2 = ";
	c2.display();
	cout<<"c3 = ";
	c3.display();
	getch();
}