
// ch-3(23)
// java program for showing the constructor of vector class..
import java.util.*;

public class v058_vectorex extends Vector {
    public static void main(String[] args) {
        Vector v1 = new Vector(); // default contructor
        System.out.println("vector1: size = " + v1.size() + " capacity = " + v1.capacity());
        Vector v2 = new Vector(5); // initial size 5
        for (int i = 1; i <= 5; i++) {
            v2.addElement(i);
        }
        System.out.println("Vecot2: " + v2);
        System.out.println("Vecot2: size = " + v2.size() + " capacity = " + v2.capacity());
        v2.addElement("some value"); // capacity will be doubled
        System.out.println("Now, vector2: size = " + v2.size() + " capacity = " + v2.capacity());
        Vector v3 = new Vector(5, 2); // initial value 5 increament value 2
        for (int i = 1; i <= 5; i++) {
            v3.addElement(i * i);
        }
        System.out.println("Vector3: " + v3);
        System.out.println("Vector3: size = " + v3.size() + " capacity= " + v3.capacity());
        v3.addElement("Hello");
        System.out.println("Now, vector3: " + v3);
        System.out.println("Now Vector: size = " + v3.size() + " capaity= " + v3.capacity());
    }
}