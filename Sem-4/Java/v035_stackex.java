// ch-2(15)
//Stack interface declares two methods push() and pop()

interface Stack {
    void push(int item); // to insert an item

    int pop(); // to delete an item
}

class MyStack implements Stack {
    private int stack[];
    private int top;

    MyStack(int size) {
        stack = new int[size];
        top = -1;
    }

    public void push(int item) {
        if (top == stack.length - 1) {
            System.out.println("Stack is full");
        } else {
            top++;
            stack[top] = item;
        }
    }

    public int pop() {
        if (top < 0) {
            System.out.println("Stack is empty");
            return 0;
        } else {
            int item = stack[top];
            top--;
            return item;
        }
    }
}

public class v035_stackex {
    public static void main(String[] args) {
        MyStack m1 = new MyStack(5);
        for (int i = 0; i <= 6; i++) {
            m1.push(i * 100);
        }
        for (int i = 1; i <= 6; i++) {
            System.out.println("element popped : " + m1.pop());
        }
    }
}
