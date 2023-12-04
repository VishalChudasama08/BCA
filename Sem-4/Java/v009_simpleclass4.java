class banking {
    double p, r;
    int n;

    void initialize(double pa, double ri, int ny) {
        p = pa;
        r = ri;
        n = ny;
    }

    double simpleleinterset() {
        return (p * r * n / 100);
    }
}

class v009_simpleclass4 {
    public static void main(String[] args) {
        banking b1 = new banking();
        b1.initialize(5000, 12, 5);
        double si = b1.simpleleinterset();
        System.out.println("simple initerst of b1 is : " + si);
        banking b2 = new banking();
        b2.initialize(10000, 10, 4);
        System.out.println("simple interest of b2 is : " + b2.simpleleinterset());
    }
}