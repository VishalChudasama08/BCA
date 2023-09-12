/* write a c++ cource code to show the use of the hybrid inharitance */
#include <iostream.h>
#include <conio.h>
class student
{
protected:
    int roll_number;

public:
    void get_number(int a)
    {
        roll_number = a;
    }
    void put_number(void)
    {
        cout << "roll no : " << roll_number << endl;
    }
};

class test : public student
{
protected:
    float part1, part2;

public:
    void get_marks(float x, float y)
    {
        cout << "marks obtained : " << endl;
        cout << "part1 = " << part1 << endl;
        cout << "part2 = " << part2 << endl;
    }
};

class sports
{
protected:
    float score;

public:
    void get_score(float s)
    {
        score = s;
    }
    void put_score(void)
    {
        cout << "sports wt: " << score << endl
             << endl;
    }
};

class result : public test, public sports
{
    float total;

public:
    void display(void);
};

void result::display(void)
{
    total = part1 + part2 + score;
    put_number();
    get_marks();
    put_score();
    cout << "total score: " << total << endl;
}
void main()
{
    result student_1;
    clrscr();
    student_1.get_number(1234);
    student_1.get_marks(27.5, 33);
    student_1.get_score(6.0);
    student_1.display();
    getch();
}