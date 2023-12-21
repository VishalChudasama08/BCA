//027
//java program to call method dynamically at runtime
class Shape {
    double height, width;

    Shape(double w, double h) {
        width = w;
        height = h;
    }

    double area() {
        return 0;
    }
}

class Rectangle extends Shape {
    Rectangle(double w, double h) {
        super(w, h);
    }

    double area() {
        return (width * height);
    }
}

class Triangle extends Shape {
    Triangle(double base, double height) {
        super(base, height);
    }

    double area() {
        return (0.5 * height * width);
    }
}

class v027_dynamicmeth {
    public static void main(String[] args) {
        Shape ref; // creating reference of superclass
        Rectangle r = new Rectangle(20, 30);
        ref = r; // r is assigned to reference to refer to rectangle class

        System.out.println("Area of Rectangle : " + ref.area());

        Triangle t = new Triangle(10, 20);
        ref = t; // t is assigned to reference to refer to triangle class

        System.out.println("Area of Triangle : " + ref.area());
    }
}
