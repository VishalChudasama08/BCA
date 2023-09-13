/* write a c++ source code to show the use of contructor in derived class */
#include <iostream.h>
#include <conio.h>
class alpha
{
    int x;

public:
    alpha(int i)
    {
        x = i;
        cout << "aplha initialized\n";
    }
    void show_x(void)
    {
        cout << "x = " << x << endl;
    }
};
class beta
{
    float y;

public:
    beta(float j)
    {
        y = j;
        cout << "beta initialized\n";
    }
    void show_y(void)
    {
        cout << "y = " << y << endl;
    }
};
class gamma : public beta, public alpha
{
    int m, n;

public:
    gamma(int a, float b, int c, int d) : alpha(a), beta(b)
    {
        m = c;
        n = d;
        cout << "gamma initialized\n";
    }
    void show_mn(void)
    {
        cout << "m = " << m << endl
             << "n = " << n << endl;
    }
};
void main()
{
    gamma g(5, 10.75, 20, 30);
    clrscr();
    g.show_x();
    g.show_y();
    g.show_mn();
    getch();
}