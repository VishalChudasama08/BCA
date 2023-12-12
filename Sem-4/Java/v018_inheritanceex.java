// 018
// single inheritance example....

class superclass {
    int a, b;

    void displaysuper() {
        System.out.println("Displaying superclass");
        System.out.println("a= " + a + " and b= " + b);
    }
}

class subclass extends superclass {
    int c, d;

    void displaysub() {
        System.out.println("Displaying subclass");
        System.out.println("a= " + a + " and b= " + b);
        System.out.println("c= " + c + " and d= " + d);
    }
}

public class v018_inheritanceex {
    public static void main(String[] args) {
        subclass sub = new subclass();
        sub.a = 10;
        sub.b = 20;
        sub.c = 30;
        sub.d = 40;
        sub.displaysuper();
        sub.displaysub();
    }
}
