// ch-3(21)
// java program to show the use of hashtable...

import java.util.*;

public class v056_bashtableex {
    public static void main(String[] args) {
        Hashtable b1 = new Hashtable(6, 0.5F); // increase by 3
        b1.put("FirstName", "jitu");
        b1.put("LastName", "sir");
        b1.put("City", "Rajkot");

        System.out.println("The name is: " + b1.get("FirstName"));
        System.out.println("The City is: " + b1.get("City"));
        System.out.println("The Hashtable is: ");
        System.out.println(b1);
        String str = b1.toString();
        ;
        System.out.println("The hashtable as String: ");
        System.out.println(str);
        Enumeration keyen = b1.keys();
        Enumeration valueen = b1.elements();
        System.out.println();
        System.out.println("*** The entries are ***");
        System.out.println();
        while (keyen.hasMoreElements()) {
            System.out.println(keyen.nextElement() + " ==> " + valueen.nextElement());
        }
    }
}