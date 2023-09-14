/* prg for pointer to object */
#include <iostream.h>
#include <conio.h>
class item
{
    int code;
    float price;

public:
    void getdata(int a, float b)
    {
        code = a;
        price = b;
    }
    void show(void)
    {
        cout << "code : " << code << endl;
        cout << "price : " << price << endl;
    }
};
const int size = 2;
void main()
{
    item *p = new item[size];
    item *d = p;
    int x, i;
    float y;
    clrscr();
    for (i = 0; i < size; i++)
    {
        cout << "input code and price for item - " << i + 1 << " :- ";
        cin >> x >> y;
        p->getdata(x, y);
        p++;
    }
    for (i = 0; i < size; i++)
    {
        cout << "item : " << i + 1 << endl;
        d->show();
        d++;
    }
    getch();
}