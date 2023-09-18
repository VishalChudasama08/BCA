/* write a c++ source code to show the use of the multilevel inheritace */
#include <iostream.h>
#include <conio.h>
class Student
{
protected:
    int roll_number;

public:
    void get_number(int);
    void put_number(void);
};
void Student::get_number(int a)
{
    roll_number = a;
}
void Student::put_number(void)
{
    cout << "roll number : " << roll_number << endl;
}

class test : public Student // first level derivation
{
protected:
    float sub1;
    float sub2;

public:
    void get_marks(float, float);
    void put_marks(void);
};
void test::get_marks(float x, float y)
{
    sub1 = x;
    sub2 = y;
}
void test::put_marks(void)
{
    cout << "marks in sub1 : " << sub1 << endl;
    cout << "marks in sub2 : " << sub2 << endl;
}

class result : public test
{
    float total;

public:
    void display(void);
};
void result::display(void)
{
    total = sub1 + sub2;
    put_number();
    put_marks();
    cout << "total = " << total << endl;
};
void main()
{
    result student_1;
    student_1.get_number(111);
    student_1.get_marks(75.0, 59.5);
    student_1.display();
    getch();
}