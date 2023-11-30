/* prg i/o operations on characters in file */
#include <iostream>
#include <conio.h>
#include <string.h>
#include <fstream>
using namespace std;
int main()
{
    char string[80];
    // clrscr();
    cout << "Enter a string :- ";
    cin >> string;
    int len = strlen(string);
    fstream file; // input and output stream
    file.open("abc.txt", ios::in | ios::out);
    for (int i = 0; i < len; i++)
    {
        file.put(string[i]); // put a acharater to file
    }
    file.seekg(0); // go to start
    char ch;
    while (file)
    {
        file.get(ch); // get a char form file
        cout << ch;   // then display on screen
    }
    // file.close();
    // getch();
    return 0;
}