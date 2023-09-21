/* prg for working with multiple files */
#include <iostream>
#include <fstream>
#include <conio.h>
using namespace std;
int main()
{
    ofstream fout;
    fout.open("country.txt");
    fout << "united states of america \n";
    fout << "united kingdom \n";
    fout << "south korea \n";
    fout.close();

    fout.open("capital.txt");
    fout << "washington \n";
    fout << "london \n";
    fout << "seoul \n";
    fout.close();

    // reading the files
    const int n = 80;
    char line[n];

    ifstream fin;
    // clrscr();

    fin.open("country.txt");
    cout << "contents of country file \n";
    while (fin)
    {
        fin.getline(line, n);
        cout << line << endl;
    }
    fin.close();
    fin.open("capital.txt");
    cout << "contents of capital file \n";
    while (fin)
    {
        fin.getline(line, n);
        cout << line << endl;
    }
    fin.close();
    // getch();
    return 0;
}