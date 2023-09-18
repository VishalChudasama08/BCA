/* write a c++ source code to show the use of the privately inheriting the class */
#include <iostream.h>
#include <conio.h>
class B
{
    int a;

public:
    int b;
    void get_ab(void);
    int get_a(void);
    void show_a(void);
};

class D : private B
{
    int c;

public:
    void mul(void);
    void display(void);
};

void B::get_ab(void)
{
    cout << "Enter values for a and b: ";
    cin >> a >> b;
}
int B::get_a(void)
{
    return a;
}
void B::show_a(void)
{
    cout << "a = " << a << endl;
}
void D::mul(void)
{
    get_ab();
    c = b * get_a();
}
void D::display(void)
{
    show_a();
    cout << "b = " << b << endl;
    cout << "c = " << c << endl;
}
void main()
{
    D d;
    clrscr();
    // d.get_ab(); //wont work
    d.mul();
    // d.show_a(); //wont work
    d.display();
    // d.b=20; //wont work; b has become private
    d.mul();
    d.display();
    getch();
}