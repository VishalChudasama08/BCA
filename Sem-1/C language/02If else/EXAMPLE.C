#include<stdio.h>
#include<conio.h>
int fib_recursive(int n){
    return 0;
}
int fib_iterative(int n){
    return 0;
}
int main(){
    int number;
    printf("Enter the index to get fibonacci series\n");
    scanf("%d", &number);
    printf("The value of fibonacci number at position no %d using iterative approach is %d\n", number, fib_iterative (number) );
    printf("The value of fibonacci number at position no %d using iterative approach is %d\n", number, fib_recursive(number));
return 0;
}