/* prg for formatting using flags in setf */
#include <iostream>
using namespace std;
#include <conio.h>
#include <cmath>
int main()
{
    // clrscr();
    cout.fill('*');
    cout.setf(ios::left, ios::adjustfield);
    cout << "value";
    cout.setf(ios::right, ios::adjustfield);
    cout.width(15);
    cout << "sqrt of value" << endl;
    cout.fill(',');
    cout.precision(4);
    cout.setf(ios::showpoint);
    cout.setf(ios::showpos);
    cout.setf(ios::fixed, ios::floatfield);
    for (int n = 0; n <= 10; n++)
    {
        cout.setf(ios::internal, ios::adjustfield);
        cout.width(5);
        cout << n;
        cout.setf(ios::right, ios::adjustfield);
        cout.width(20);
        cout << sqrt(n) << endl;
    }
    // floatfield changed
    cout.setf(ios::scientific, ios::floatfield);
    cout << "\nsqrt(100)=" << sqrt(100) << endl;
    // getch();
    return 0;
}