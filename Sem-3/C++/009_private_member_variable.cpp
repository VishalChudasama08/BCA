/* write a c++ source code to show the use of the private member variable */
#include <iostream>
#include <conio.h>
using namespace std;
class abc
{
    int x;              // this is private variable if you not specify then it is automatically set as private
    int getvalue(void); // it is alsow private funtion
public:
    void editvalue(void);
};
int abc::getvalue()
{
    cout << "Enter the value of variable: \n";
    cin >> x;
    return x;
}
void abc::editvalue(void)
{
    getvalue(); // private function
    x = x + 15;
    cout << "The value after modification is: " << x;
}
int main()
{
    // clrscr();
    abc p;
    p.editvalue();
    // getch();
    return 0;
}