//028
//java program to show the use of obstract class and abstract method

abstract class Shape {
    double height, width;

    Shape(double height, double width) {
        this.height = height;
        this.width = width;
    }

    abstract double area();
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

public class v028_abstractex {
    public static void main(String[] args) {
        Shape ref; // creating Refrance of superclass
        Rectangle r = new Rectangle(10, 15);
        ref = r;

        System.out.println("Area of Rectangle : " + ref.area());

        Triangle t = new Triangle(20, 15);
        ref = t;
        System.out.println("Area of Triangle : " + ref.area());
    }
}
