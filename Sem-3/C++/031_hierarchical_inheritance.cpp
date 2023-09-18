/* write a c++ source code to demonstate example of hierarchical inheritance to get square and cube of a number. */
#include <iostream.h>
#include <conio.h>
class Number
{
private:
    int num;

public:
    void getNumber(void)
    {
        cout << "Enter an integer Number : ";
        cin >> num;
    }
    // to return num
    int returnNumber(void)
    {
        return num;
    }
};

// base class 1, to calculate square of a number
class Square : public Number
{
public:
    int getSquare(void)
    {
        int num, sqr;
        num = returnNumber(); // get Number from class Number
        sqr = num * num;
        return sqr;
    }
};

// Base class 1, to calculate cube of a number
class Cube : public Number
{
public:
    int getCube(void)
    {
        int num, cube;
        num = returnNumber(); // get Number from class Number
        cube = num * num * num;
        return cube;
    }
};
void main()
{
    Square objS;
    Cube objC;
    int sqr, cube;
    clrscr();
    objS.getNumber();
    sqr = objS.getSquare();
    cout << "Square of " << objS.returnNumber() << " is " << sqr << endl;
    objC.getNumber();
    cube = objC.getCube();
    cout << "cube of " << objC.returnNumber() << " is " << cube << endl;
    getch();
}