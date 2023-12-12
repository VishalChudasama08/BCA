//017
// program for permeterized constructor and this keyword

class banking {
    double p;
    double r;
    int n;

    banking(double p, double r, int n) {
        System.out.println("Executing constrector ");
        this.p = p;
        this.r = r;
        this.n = n;
    }

    double simpleinterest() {
        return (p * r * n) / 100;
    }
}

public class v017_thiskeyex {
    public static void main(String[] args) {
        banking b1 = new banking(10000, 10, 5); // calling constructor
        double si = b1.simpleinterest();
        System.out.println("Simple Interest of b1 is : " + si);
        banking b2 = new banking(8000, 12, 4);
        System.out.println("Simple Interest of b2 is : " + b2.simpleinterest());
    }
}
