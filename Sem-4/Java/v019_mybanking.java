// 019
// program to show the practical use of inheritance which extends the banking class 

class banking {
    double p, r;
    int n;

    double simpleinterest() {
        return ((p * r * n) / 100);
    }
}

class newbanking extends banking {
    newbanking(double pa, double roi, int noy) {
        p = pa;
        r = roi;
        n = noy;
    }

    double compoundinterest() {
        double ci = p * Math.pow((1 + r / 100), n);
        return (ci - p);
    }
}

public class v019_mybanking {
    public static void main(String[] args) {
        newbanking n = new newbanking(10000, 12, 5);
        double si = n.simpleinterest();
        double ci = n.compoundinterest();
        System.out.println("simple interest is : " + si);
        System.out.println("compound interest is : " + Math.rint(ci));
    }
}
