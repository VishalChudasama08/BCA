// ch-3(12)
// java program to show the use of string 
public class v047_strconstructorex {
    public static void main(String[] args) {
        String s1 = new String();
        char[] charaArray = { 'H', 'e', 'l', 'l', 'o', 'F', 'r', 'i', 'e', 'n', 'd', 's' };
        String s2 = new String(charaArray);
        String s3 = new String(charaArray, 5, 7);

        String s4 = new String(s3);
        byte bytearray[] = { 97, 98, 99, 100, 101, 102 };
        String s5 = new String(bytearray);
        String s6 = new String(bytearray, 3, 3);

        System.out.println("String 1 is: " + s1);
        System.out.println("String 2 is: " + s2);
        System.out.println("String 3 is: " + s3);
        System.out.println("String 4 is: " + s4);
        System.out.println("String 5 is: " + s5);
        System.out.println("String 6 is: " + s6);
    }
}
