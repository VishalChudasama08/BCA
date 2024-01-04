// ch-3(15)
// String Searching methods...
public class v050_stringsearchex {
    public static void main(String[] args) {
        String str = "This is a test to test the String methods";
        System.out.println("The String is: " + str);
        System.out.println("Length of str is: " + str.length());
        System.out.println("Index of 't' is: " + str.indexOf('t'));
        System.out.println("Last Index of 't' is: " + str.lastIndexOf('t'));
        System.out.println("Index of 'test' is: " + str.indexOf("test"));
        System.out.println("Last Index of 'test' is: " + str.lastIndexOf("test"));
        System.out.println("Index of 't' from 11 is: " + str.indexOf('t', 11));
        System.out.println("Last Index of 't' from 35 is: " + str.lastIndexOf('t', 35));
        System.out.println("Index of \"th\" from 11 is: " + str.indexOf("th", 11));
        System.out.println("Last Index of \"th\" from 25 is: " + str.lastIndexOf("th", 25));
        System.out.println("Index of 'x' is: " + str.indexOf('x'));
        // -1 it mins not found (on general -> not possible, error)
    }
}
