/* write a c++ source code to show the use of the constructor */
#include<iostream.h>
#include<conio.h>
class integer{
	int m,n;
	public:
	integer(int, int); //constructor declared
	void display(){
		cout<<"m = "<<m<<endl;
		cout<<"n = "<<n<<endl;
	}
};
integer::integer(int x, int y){ //constructor defination
	m=x;
	n=y;
}
void main(){
	integer int1(0, 100); //constructor called implicitly
	integer int2=integer(25, 75); //constructor called explicity
	clrscr();
	cout<<"\n object 1"<<endl;
	int1.display();
	cout<<"\n object 2"<<endl;
	int2.display();
	getch();
}