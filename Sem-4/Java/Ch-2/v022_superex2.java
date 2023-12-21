//022
//java program to use super keyword which is used to access member of base class
class abc {
    int a;

    void display() {
        System.out.println("Super class method ");
    }
}

class xyz extends abc {
    int a;

    xyz(int p, int q) {
        a = p; // a of sub class
        super.a = q; // a of super class
    }

    void show() {
        System.out.println("a in subclass : " + a);
        System.out.println("a in superclass : " + super.a);
        super.display();
    }
}

public class v022_superex2 {
    public static void main(String[] args) {
        xyz x = new xyz(10, 20);
        x.show();
    }
}
