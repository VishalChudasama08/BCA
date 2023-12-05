//013
//program for adding constructor to banking
class banking {
    double p;
    double r;
    int n;

    banking() {
        System.out.println("Executing constructor");
        p = 10000;
        r = 12;
        n = 5;
    }

    double simpleinterset() {
        return (p * r * n / 100);
    }
}

public class v013_constructorex {
    public static void main(String args[]) {
        banking b1 = new banking(); // calling constructer
        double si = b1.simpleinterset();
        System.out.println("simple interest of b1 is : " + si);

        banking b2 = new banking();
        System.out.println("simple interest of b2 is : " + b2.simpleinterset());
    }
}
