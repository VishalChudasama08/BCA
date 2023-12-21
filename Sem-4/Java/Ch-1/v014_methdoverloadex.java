//014
//program for method overloading..... 
class Area {
    void area() {
        System.out.println("Area is Zero");
    }

    void area(double radius) {
        double a = 3.14 * radius * radius;
        System.out.println("Area of circle is " + a);
    }

    void area(double length, double width) {
        double a = length * width;
        System.out.println("Area of reatangle is " + a);
    }
}

public class v014_methdoverloadex {
    public static void main(String[] args) {
        Area a = new Area();
        a.area();
        a.area(10.0);
        a.area(15, 10);
    }
}
