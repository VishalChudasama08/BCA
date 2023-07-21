/* write a c++ source code to show the use of the nesting og member funtion */
#include<iostream>
#include<conio.h>
using namespace std;
class set{
    private:
    int m,n;
    public:
    void input(void);
    void display(void);
    int largest(void);
};
int set::largest(void){
    if (m>=n)
        return(m);
    else
        return(n);
}
void set::input(void){
    cout<<"Input values of m and n"<<"\n";
    cin>>m>>n;
}
void set::display(void){
    cout<<"largest value = "<<largest()<<"\n";
}
int main(){
    set a;
    a.input();
    a.display();
    return 0;
}