//012
//program for exaplaninig theuse of static keyword in java...

class Print10 {
    static void print() {
        System.out.println("Hello!");
    }
}

public class v012_staticex {
    static int a = 10; // static member
    static int b = 0; // static member

    static void display(int c) {
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
    }

    static { // static block....
        System.out.println("static block executed");
        b = a + 10;
    }

    public static void main(String srgs[]) {
        display(30); // static method of same class is called directly....
        Print10.print(); // static method of other class is called by class name....
    }
}
