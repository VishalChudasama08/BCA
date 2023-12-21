//023
//java program to show thar private memebers can be accessed from other class
class Super {
    int a;
    private int x; // x is private property of super class

    void initialize(int a, int x) {
        this.a = a;
        this.x = x;
    }
}

class sub extends Super {
    void display() {
        System.out.println("a = " + a);
        // System.out.println("x = "+x); //can not access to x
    }
}

public class v023_privateex {
    public static void main(String[] args) {
        sub s = new sub();
        s.initialize(10, 20);
        s.display();
    }
}
