/* write a c++ source code to show the use of the inline function */
#include<iostream.h>
#include<conio.h>
inline float mul(float x, float y){
	return(x*y);
}
inline double dive(double p, double q){
	return(p/q);
}
void main(){
	float a=12.345;
	float b=9.62;
	clrscr();
	cout<<mul(a,b)<<"\n";
	cout<<dive(a,b)<<endl;
	getch();
}