/* write a c++ source code to show the use of the array of object */
#include<iostream.h>
#include<conio.h>
class emp{
	char name[30];
	float age;
	public:
	void getdata(void);
	void putdata(void);
};
void emp::getdata(void){
	cout<<"Enter The Name: ";
	cin>>name;
	cout<<"\nEnter The Age: ";
	cin>>age;
}
void emp::putdata(void){
	cout<<"The name is: "<<name<<endl;
	cout<<"The age is: "<<age<<endl;
}
const int size=3;
void main(){
	emp manager[size];
	clrscr();
	for(int i=0; i<size; i++){
		cout<<"\nDetails of manager "<<i+1<<endl;
		manager[i].getdata();
	}
	cout<<"\n";
	for(i=0;i<size;i++){
		cout<<"\nManager "<<i+1<<endl;
		manager[i].putdata();
	}
	getch();
}