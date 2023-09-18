/* write a c++ source code to code to show the use of the frind function */
#include<iostream>
#include<conio.h>
using namespace std;
class sample{
	int a,b;
	public:
	void setvalue(){
		a=25;
		b=240;
	}
	float mean(sample s);
};
float sample::mean(sample s){
	return (s.a+s.b)/2.0;
}
int main(){
	sample x; //object x
	//clrscr();
	x.setvalue();
	cout<<"mean value = "<<x.mean(x)<<"\n";
	//getch();
	return 0;
}