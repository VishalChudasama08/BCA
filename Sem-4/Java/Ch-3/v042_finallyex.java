// ch-3(7)
// java program to show the use of finally block in exception handling...

public class v042_finallyex {
    static void meth1() {
        try {
            System.out.println("Method 1");
            throw new ArithmeticException();
        } catch (Exception e) {
            System.out.println("finally of method1");
        }
    }

    static void meth2() {
        try {
            System.out.println("Method 2");
            return;
        } finally {
            System.out.println("finally of method2");
        }
    }

    public static void main(String[] args) {
        try {
            meth1();
        } catch (ArithmeticException ae) {
            System.out.println("Arithmetic Exception.");
        }
        meth2();
        try {
            System.out.println("Normall statement.");
        } catch (Exception e) {
            System.out.println("Exception is " + e);
        } finally {
            System.out.println("finally of main() method.");
        }
    }
}
