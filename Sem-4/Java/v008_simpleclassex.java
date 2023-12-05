//008
//prg to declare and create objects of class...
class banking {
    double p;
    double r;
    int n;
}

public class v008_simpleclassex {
    public static void main(String[] args) {
        banking b1 = new banking();
        b1.p = 5000;
        b1.r = 12;
        b1.n = 5;
        double si = b1.p * b1.r * b1.n / 100;
        System.out.println("simple interst of b1: " + si);
        banking b2 = new banking();
        b2.p = 10000;
        b2.r = 10;
        b2.n = 4;
        si = b2.p * b2.r * b2.n / 100;
        System.out.println("simple interst of b2: " + si);
    }
}
