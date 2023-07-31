/* write a c++ source code to use friend function between two classes */
#include<iostream.h>
#include<conio.h>
class abc;
class xyz{
	int x;
	public:
	void setvalue(int i){
		x=i;
	}
	friend void max(xyz, abc);
};
class abc{
	int a;
	public:
	void setvalue(int i){
		a=i;
	}
	friend void max(xyz, abc);
};
void max(xyz m,abc n){ //defination of friend function
	if(m.x >= n.a)
		cout<<m.x;
	else
		cout<<n.a;
}
void main(){
	abc c;
	clrscr();
	c.setvalue(10);
	xyz z;
	z.setvalue(20);
	max(z, c);
	getch();
}