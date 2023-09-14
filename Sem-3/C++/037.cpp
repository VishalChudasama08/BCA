/* prg for virtual funtion */
#include <iostream.h>
#include <conio.h>
class base
{
public:
    void display()
    {
        cout << "\n display base";
    }
    virtual void show()
    {
        cout << "\n show base";
    }
};
class derived : public base
{
public:
    void display()
    {
        cout << "\n display derived";
    }
    void show()
    {
        cout << "\n show derived";
    }
};
void main()
{
    base b;
    derived d;
    base *bptr;
    clrscr();
    cout << "\n beta pointer to base \n";
    bptr = &b;
    bptr->display(); // calls base version
    bptr->show();    // calls base version
    cout << "\n\n bptr pointer to derived\n";
    bptr = &d;
    bptr->display(); // calls base version
    bptr->show();    // calls derived version
    getch();
}