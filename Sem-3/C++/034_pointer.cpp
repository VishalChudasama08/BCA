/* prg for this pointer */
#include <iostream.h>
#include <conio.h>
#include <string.h>
class person
{
    char name[20];
    float age;

public:
    person(char *s, float a)
    {
        strcpy(name, s);
        age = a;
    }
    person &person::greater(person &x)
    {
        if (x.age >= age)
            return x;
        else
            return *this;
    }
    void display(void)
    {
        cout << "name : " << name << endl;
        cout << "age : " << age << endl;
    }
};
void main()
{
    person p1("dipak", 37.50), p2("naresh", 29.0), p3("sawan", 40.25);
    person p = p1.greater(p3);
    clrscr();
    cout << "elder person is : \n";
    p.display();
    p = p1.greater(p2);
    cout << "elder person is : \n";
    p.display();
    getch();
}