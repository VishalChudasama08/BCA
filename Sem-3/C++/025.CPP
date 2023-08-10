/*write a c++ source code to show the use of the operator overloading using frind function */
#include<iostream.h>
#include<conio.h>
const size=3;
class vector{
	int v[size];
	public:
	vector();
	vector(int *x);
	friend vector operator *(int a, vector b);
	friend vector operator *(vector b, int a);
	friend istream & operator >> (istream &, vector &);
	friend ostream & operator << (ostream &, vector &);
};
vector::vector(){
	for(int i=0; i<size; i++)
		v[i]=0;
}
vector::vector(int *x){
	for(int i=0; i<size; i++)
		v[i]=x[i];
}
vector operator *(int a, vector b){
	vector c;
	for(int i=0; i<size; i++)
		c.v[i]=a*b.v[i];
	return c;
}
vector operator *(vector b, int a){
	vector c;
	for(int i=0; i<size; i++)
		c.v[i]=b.v[i]*a;
	return c;
}
istream & operator >> (istream &din, vector &b){
	for(int i=0; i<size; i++)
		din>>b.v[i];
	return(din);
}
ostream & operator << (ostream &dout, vector &b){
	dout<<"c"<<b.v[0];
	for(int i=1; i<size; i++)
		dout<<","<<b.v[i];
	dout<<")";
	return(dout);
}
int x[size] = {2,4,6};
void main(){
	vector m; //invokes constructor 1
	vector n=x; //invokes constructor 2
	clrscr();
	cout<<"enter element of vector m "<<endl;
	cin>>m; //invokes operator >>() function
	cout<<endl;
	cout<<"m ="<<m<<endl; //invokes operator <<() function
	vector p,q;
	p=2*m; //invokes friend 1
	q=n*2; //invokes friend 2
	cout<<endl;
	cout<<"p = "<<p<<endl; //invokes operator <<()
	cout<<"q = "<<q<<endl;
	getch();
}