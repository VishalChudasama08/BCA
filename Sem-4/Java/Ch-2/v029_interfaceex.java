// 029
//simple example of interface...
interface MyInterface {
    int val = 100;

    void print();

    int getvalue();
}

class MyClass implements MyInterface {
    public void print() {
        System.out.println("This is print method");
    }

    public int getvalue() {
        int newval = val + 100; // val can be used but can not be changed
        // val = val + 100; //val is final variable
        return newval;
    }

    void ownmethod() { // method of myclass
        System.out.println("this is own method of mycalss");
    }
}

public class v029_interfaceex {
    public static void main(String[] args) {
        MyClass m = new MyClass();
        m.print();

        System.out.println("value is : " + m.getvalue());
        m.ownmethod();
    }
}
