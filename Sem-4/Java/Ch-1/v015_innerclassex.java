//014
//write a java program for showing the use of inner class and outer class...

class outerclass {
    int o = 10;

    void test() {
        Inner in = new Inner();
        in.display();
    }

    class Inner {
        int i = 100;

        void display() {
            System.out.println("Outer is " + o);
        }
    }

    void showInner() {
        // System.out.println("Inner is : " + i); // i is not known here....
        Inner in = new Inner();
        System.out.println("Inner is " + in.i);
    }
}

public class v015_innerclassex {
    public static void main(String[] args) {
        outerclass outer = new outerclass();
        outer.test();
        outer.showInner();
    }
}
