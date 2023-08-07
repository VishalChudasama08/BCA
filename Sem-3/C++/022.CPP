/* write a c++ source codeto show the use of the destructors */
#include<iostream.h>
#include<conio.h>
int count=0;
class alpha{
	public:
	alpha(){
		count++;
		cout<<"\n no. of object created"<<count;
	}
	~alpha(){
		cout<<"\n no. of object destroyed"<<count;
		count--;
	}
};
void main(){
	clrscr();
	cout<<"\n\n Enter Main\n";
	alpha a1,a2,a3,a4;
	{
		cout<<"\n\n Enter block1\n";
		alpha a5;
	}
	{
		cout<<"\n\n Enter blovk2\n";

		alpha a6;
	}
	cout<<"\n reenter block main\n";
	getch();
}