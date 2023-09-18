/* prg for array of pointers to objects */
#include <iostream.h>
#include <conio.h>
#include <string.h>
class city
{
protected:
    char *name;
    int len;

public:
    city()
    {
        len = 0;
        name = new char[len + 1];
    }
    void getname(void)
    {
        char *s;
        s = new char[30];
        cout << "Enter your city name: ";
        cin >> s;
        len = strlen(s);
        name = new char[len + 1];
        strcpy(name, s);
    }
    void printname(void)
    {
        cout << name << endl;
    }
};
void main()
{
    city *cptr[10]; // array of 10 pointer to cities
    int n = 1;
    int option;
    clrscr();
    do
    {
        cptr[n] = new city; // create new city
        cptr[n]->getname();
        n++;
        cout << "do you want to enter one more city name\n";
        cout << "(enter 1 for yes and 0 for no): ";
        cin >> option;
    } while (option);
    cout << "\n";
    for (int i = 1; i < n; i++)
    {
        cptr[i]->printname();
    }
    getch();
};