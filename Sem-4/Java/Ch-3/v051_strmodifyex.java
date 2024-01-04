// ch-3(16)
// string modifying methods...
public class v051_strmodifyex {
    public static void main(String[] args) {
        String str1 = "This is simple String";
        String str2 = "  String example  ";
        System.out.println("String 1: " + str1);
        System.out.println("String 2: " + str2);
        String substr1 = str1.substring(9);
        // substring() with one parameter
        String substr2 = str2.substring(9, 16);
        // substring() with two parameter.
        System.out.println("substring 1: " + substr1);
        System.out.println("substring 2: " + substr2);
        String newString = str1.replace('s', 'S');
        System.out.println("New String: " + newString);
        System.out.println("Trimmed string: " + str2.trim());
        System.out.println("The String in lowercase: " + str2.toLowerCase());
        System.out.println("The String in Uppercase: " + str2.toUpperCase());
    }
}
