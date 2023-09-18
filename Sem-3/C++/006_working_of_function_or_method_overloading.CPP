/* write a c++ source code to show the use of the working og fuction of method overloading */
#include<iostream.h>
#include<conio.h>
int volume(int);
double volume(double, int); //defrent argument and return type
long volume(long, int, int);
int main(){
	clrscr();
	cout<<volume(10)<<endl;
	cout<<volume(2.5, 8)<<endl;
	cout<<volume(1001, 75, 15)<<endl;
	getch();
	return 0;
}
//function definations
int volume(int s){ //cube
	return(s*s*s);
}
double volume(double r, int h){ //cylinder
	return(3.14159*r*r*h);
}
long volume(long l, int b, int h){ //rectangular
	return(l*b*h);
}