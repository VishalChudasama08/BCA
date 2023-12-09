//016
//program for consructor overloading....

class banking {
    double p;
    double r;
    int n;

    banking() {
        p = 0;
        r = 0;
        n = 0;
    }

    banking(double p) {
        this.p = p;
        this.r = 12;
        this.n = 1;
    }

    banking(double p, double r, int n) {
        this.p = p;
        this.r = r;
        this.n = n;
    }

    public double simpleinterest() {
        return (p * r * n) / 100;
    }
}

public class v016_consructoroverload {
    public static void main(String[] args) {
        banking b1 = new banking();
        banking b2 = new banking(10000);
        banking b3 = new banking(10000, 10, 5);
        double si1 = b1.simpleinterest();
        double si2 = b2.simpleinterest();
        double si3 = b3.simpleinterest();
        System.out.println("Simple Interest of b1 is : " + si1);
        System.out.println("Simple Interest of b2 is : " + si2);
        System.out.println("Simple Interest of b3 is : " + si3);
    }
}