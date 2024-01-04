// ch-3(24)
// java program for methods of vector class..

import java.util.Enumeration;
import java.util.Vector;

public class v059_vectormethods {
    public static void main(String[] args) {
        Vector v1 = new Vector(6, 3);
        v1.addElement("java");
        v1.addElement("Computers");
        v1.addElement(123);
        v1.addElement(98.76);
        System.out.println("Vector: " + v1);
        System.out.println("First elements: " + v1.firstElement() + " last element: " + v1.lastElement());
        v1.insertElementAt("Happy", 2);
        v1.insertElementAt("smile", 3);
        System.out.println("After inserting, vector: " + v1);
        v1.removeElementAt(0);
        v1.removeElement("computers");
        System.out.println("After removing, vector: " + v1);
        System.out.println("smile is at position: " + v1.indexOf("smile") + " in the vector");
        System.out.println("The vector contains 123: " + v1.contains(456));
        Enumeration en = v1.elements();
        System.out.println("**** The elements of the Vector ****");
        int i = 1;
        while (en.hasMoreElements()) {
            System.out.println("Element[" + i + "] : " + en.nextElement());
            i++;
        }
    }
}
