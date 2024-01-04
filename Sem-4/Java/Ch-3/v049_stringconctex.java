public class v049_stringconctex {
    public static void main(String[] args) {
        String s1 = " Hello ";
        String s2 = s1.concat("Student");
        // using concat method()
        String s3 = s1 + "Frineds"; // using + operator
        int price = 100;
        String s4 = "Price is Rs. " + price;
        // use + operator to append other data type
        System.out.println("String 1: " + s1);
        System.out.println("String 2: " + s2);
        System.out.println("String 3: " + s3);
        System.out.println("String 4: " + s4);
    }
}
