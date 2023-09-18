/* prg for chsrscter i/o with get and put */
#include <iostream>
using namespace std;
#include <conio.h>
int main()
{
    int count = 0;
    char c;
    // clrscr();
    cout << "input text\n";
    cin.get();
    while (c != '\n')
    {
        cout.put(c);
        count++;
        cin.get(c);
    }
    cout << "\n Number of characters = " << count << endl;
    // getch();
    return 0;
}