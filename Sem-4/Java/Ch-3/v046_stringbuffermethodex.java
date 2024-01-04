public class v046_stringbuffermethodex {
    public static void main(String[] args) {
        StringBuffer sb1 = new StringBuffer();
        StringBuffer sb2 = new StringBuffer();
        sb1.setCharAt(2, 'x');
        System.out.println("Set character 'x' 2 : " + sb1);
        sb2.append(" Friends ");
        System.out.println("After appeanding 'friends' : " + sb2);
        sb2.insert(6, "My");
        System.out.println("After inserting 'My' : " + sb2);

        StringBuffer str = new StringBuffer("ABCDEFGH");
        str.reverse();
        System.out.println("the reverse : " + str);
        str.delete(0, 3);
        System.out.println("After deleting : " + str);
        System.out.println("Deleting caharater at 2 " + str.deleteCharAt(2));

        StringBuffer s = new StringBuffer("I like computers.");
        s.replace(2, 6, "dont like");
        System.out.println("After replacing : " + s);
        System.out.println("substring is : " + s.substring(7));
    }
}
