/* write a c++ source code to show the working og the static number funtion */
#include<iostream.h>
#include<conio.h>
class test{
	int code;
	static int count; //static member
	public:
	void setcode(void){
		code= ++count;
	}
	void showcode(void){
		cout<<"Object member "<<code<<endl;
	}
	static void showcount(void){
		cout<<"count : "<<count<<endl;
	}
};
int test::count;
void main(){
	test t1,t2;
	clrscr();
	t1.setcode();
	t2.setcode();
	test::showcount(); //acess static method
	//syntax :- <class_name>::<static_function_name>
	test t3;
	test::showcount();
	t1.setcode();
	t2.setcode();
	t3.setcode();
	getch();
}