/* prg for user defined manipulators */
#include <iostream>
using namespace std;
#include <iomanip>
#include <conio.h>
ostream &currency(ostream &output)
{
    output << "Rs";
    return output;
}
ostream &form(ostream &output)
{
    output.setf(ios::showpos);
    output.setf(ios::showpoint);
    output.fill('*');
    output.precision(2);
    output << setiosflags(ios::fixed) << setw(10);
    return output;
}
int main()
{
    // clrscr();
    cout << currency << form << 7864.5;
    // getch();
    return 0;
}