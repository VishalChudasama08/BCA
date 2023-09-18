/* write a c++ source code to show the use of the class */
#include<iostream.h>
#include<conio.h>
class person{
	int age;
	char name[30];
	public:
	void getdata(void);
	void display(void);
};
void person::getdata(void){
	cout<<"\nEnter the name " ;
	cin>>name;
	cout<<"\nEnter the age ";
	cin>>age;
}
void person::display(void){
	cout<<"The name of the person is "<<name<<endl;
	cout<<"The age of the person is "<<age<<endl;
}
void main(){
	clrscr();
	person p;
	p.getdata();
	p.display();
	getch();
}