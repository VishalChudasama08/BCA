/* prg for creating single file */
#include <iostream>
#include <conio.h>
#include <fstream>
using namespace std;
int main()
{
    ofstream outf("item.txt"); // connect item file to outf
    // clrscr();
    cout << "Enter Item Name : ";
    char name[30];
    cin >> name;          // get name from keyboard and
    outf << name << endl; // write to file item
    cout << "Enter Item coast : ";
    float cost;
    cin >> cost;          // get cost from key board and
    outf << cost << endl; // write to file item
    outf.close();         // disconnect item file from outf
    ifstream inf("item"); // connect item file to inf
    inf >> name;          // read name from file item
    inf >> cost;          // read cost from file item
    cout << endl;
    cout << "Item name : " << name << endl;
    cout << "Item cost : " << cost << endl;
    inf.close(); // disconnect item from inf
    // getch();
    return 0;
}
