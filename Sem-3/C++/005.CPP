/* write a c++ source code to show the use of the default argument */
#include<iostream.h>
#include<conio.h>
void main(){
	float amout;
	float value(float p, int m, float r=0.15);
	void printline(char ch='x', int len=40);
	clrscr();
	printline();
	amout=value(500.00, 5);
	cout<<endl<<" final values = "<<amout<<endl;
	printline('=');
	getch();
}
float value(float p, int n, float r){
	int year=1;
	float sum=p;
	while(year<=n){
		sum=sum*(1+r);
		year=year+1;
	}
	return(sum);
}
void printline(char ch, int len){
	for(int i=1; i<=len; i++)
		cout<<ch;
	cout<<endl;
}