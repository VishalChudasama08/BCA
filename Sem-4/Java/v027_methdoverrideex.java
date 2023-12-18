class Super {
    String msg;

    Super(String msg) {
        this.msg = msg;
    }

    void display() {
        System.out.println("Mrthod of supper class");
        System.out.println("Message is : " + msg);
    }
}

class sub extends Super {
    int val;

    sub(String msg, int val) {
        super(msg);
        this.val = val;
    }

    void display() {
        System.out.println("Method of sub class");
        System.out.println("Message is : " + msg);
        System.out.println("value is : " + val);
    }
}

public class v027_methdoverrideex {
    public static void main(String[] args) {
        sub s = new sub("Hello", 100);
        s.display();
    }
}
