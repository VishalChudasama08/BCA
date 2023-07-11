// write a c++ source code to show the use of the global variable
#include<iostream.h>
#include<conio.h>
int m=10; //global m
void main(){
	clrscr();
	int m=20; //m redeclared, local to main
	main;
	{
		int k=m;
		int m=30;
		cout << "we are in inner block\n";
		cout << "k=" << k << endl;
		cout << "m=" << m << endl;
		cout << "::m=" << ::m << endl << endl;
	}
	cout << "we are in outer block\n";
	cout << "m=" << m << endl;
	cout << "::m=" << ::m << endl;
	getch();
}