// 031
// a practical example of interface...

interface Shape {
    void initialize(double dim1, double dim2);

    double area();
}

class Rectangle implements Shape {
    double height, width;

    public void initialize(double h, double w) {
        height = h;
        width = w;
    }

    public double area() {
        return (width * height);
    }
}

class Triangle implements Shape {
    double height, base;

    public void initialize(double h, double b) {
        height = h;
        base = b;
    }

    public double area() {
        return (0.5 * height * base);
    }
}

public class v034_shapeinterface {
    public static void main(String[] args) {
        Shape ref;
        Rectangle r = new Rectangle();
        Triangle t = new Triangle();
        ref = r;
        ref.initialize(20, 20);
        System.out.println("Area of Rectangle : " + ref.area());

        ref = t;
        ref.initialize(10, 20);
        System.out.println("Area of Triangle : " + ref.area());

    }
}
