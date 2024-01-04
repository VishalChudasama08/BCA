
// ch-3(18)
// java program to show the use of valueof()
public class v053_valueofex {
    public static void main(String[] args) {
        double val = 12345.67;
        int num = 98765;
        String temp = String.valueOf(val);
        System.out.println("The length of val is: " + temp.length());
        System.out.println("The length of num is: " + (String.valueOf(num)).length());
    }
}
