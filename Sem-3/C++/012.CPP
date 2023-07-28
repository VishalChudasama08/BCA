/* write a c++ sorce code to show the use of static data variable */
#include<iostream.h>
#include<conio.h>
class item{
	static int count;
	int number;
	public:
	void getdata(int a){
		number = a;
		count++;
	}
	void getcount(void){
		cout<<"count: ";
		cout<<count<<endl;
	}
};
int item::count;
/*  acess static variable syntax =>
	<datatype> <class_name>::<static_variable_name>;	*/
void main(){
	item a,b,c;
	clrscr();
	a.getcount();
	b.getcount();
	c.getcount();

	a.getdata(100);
	b.getdata(200);
	c.getdata(300);

	cout<<"After Reading Data "<<endl;

	a.getcount();
	b.getcount();
	c.getcount();
	getch();
}

