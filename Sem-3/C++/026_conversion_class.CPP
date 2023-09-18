/* write a c++ source code to show the conversion of class type to another class type */
#include<iostream.h>
#include<conio.h>
class invent2;
class invent1{
	int code, items;
	float price;
	public:
	invent1(int a,int b,float c){
		code=a;
		items=b;
		price=c;
	}
	void putdata(){
		cout<<"code: "<<code<<endl;
		cout<<"items: "<<items<<endl;
		cout<<"price: "<<price<<endl;
	}
	int getcode(){
		return code;
	}
	int getitems(){
		return items;
	}
	int getprice(){
		return price;
	}
	operator float(){
		return(price*items);
	}
}; //end of source class

class invent2{
	int code;
	float value;
	public:
	invent2(){
		code=0;
		value=0;
	}
	invent2(int x, float y){
		code=x;
		value=y;
	}
	void putdata(){
		cout<<"code: "<<code<<endl;
		cout<<"value: "<<value<<endl;
	}
	invent2(invent1 p){
		code=p.getcode();
		value=p.getitems()*p.getprice();
	}
};//end of destination class
void main(){
	invent1 s1(100, 5, 140.0);
	invent2 d1;
	float total_value;
	total_value=s1;
	d1=s1;
	clrscr();
	cout<<"product details - invent1 type "<<endl;
	s1.putdata();
	cout<<"stack value "<<endl;
	cout<<"value = "<<total_value<<endl;
	cout<<"product details - invent2 type"<<endl;
	d1.putdata();
	getch();
}