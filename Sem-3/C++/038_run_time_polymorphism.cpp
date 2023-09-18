/* prg for run time polymorphism */
#include <iostream.h>
#include <conio.h>
#include <string.h>
class media
{
protected:
    char title[50];
    float price;

public:
    media(char *s, float a)
    {
        strcpy(title, s);
        price = a;
    }
    virtual void display() {} // empty virtual funtion
};
class book : public media
{
    int pages;

public:
    book(char *s, float a, int p) : media(s, a)
    {
        pages = p;
    }
    void display();
};
class tape : public media
{
    float time;

public:
    tape(char *s, float a, float t) : media(s, a)
    {
        time = t;
    }
    void display();
};
void book::display()
{
    cout << "\nIntitle : " << title;
    cout << "\npages : " << pages;
    cout << "\nprice : " << price;
}
void tape::display()
{
    cout << "\ntitle : " << title;
    cout << "\nplay time : " << time << "mins";
    cout << "\nprice : " << price;
}
void main()
{
    char *title = new char[30];
    float price, time;
    int pages;
    clrscr();
    // book details
    cout << "\n Enter book details\n";
    cout << "title : ";
    cin >> title;
    cout << "price : ";
    cin >> price;
    cout << "pages  : ";
    cin >> pages;
    book b1(title, price, pages);

    // tape details
    cout << "Enter tape details\n ";
    cout << "title : ";
    cin >> title;
    cout << "price : ";
    cin >> price;
    cout << "play time(mins): ";
    cin >> time;
    tape t1(title, price, time);
    media *list[2];
    list[0] = &b1;
    list[1] = &t1;
    cout << "\n Media Details";
    cout << "\n............book............";
    list[0]->display(); // display book details
    cout << "\n............tape............";
    list[1]->display(); // display tape details
    getch();
}