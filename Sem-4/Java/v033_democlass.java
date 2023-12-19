//
// program to show the interface can extend another interface

interface SuperInterface {
    void method1();

    void method2(int val);
}

interface SubInterface extends SuperInterface {
    void method3(String msg);
}

class TestClass implements SubInterface {
    public void method1() {
        System.out.println("Implementotion of method1 ");
    }

    public void method2(int val) {
        System.out.println("The value is " + val);
    }

    public void method3(String msg) {
        System.out.println("The message is " + msg);
    }
}

public class v033_democlass {
    public static void main(String[] args) {
        TestClass t = new TestClass();
        t.method1();
        t.method2(100);
        t.method3("Hello Friends");
    }
}
