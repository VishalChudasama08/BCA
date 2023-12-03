//006
//simple example of type convesion and casting....
/* 
 * big data type to small data type convert esely but
 * small data type to big data type not convert, useing casting to convert it (like line number 17)
 */
public class v006_typeconversion {
    public static void main(String[] args) {
        int i = 1000;
        System.out.println("value of i : " + i);
        long l;
        l = i; // this is implicit type conversion
        System.out.println("value of l : " + l);
        long ll = 999999;
        System.out.println("value of ll : " + ll);
        int ii;
        ii = (int) ll; // using type casting....
        System.out.println("value of ii : " + ii);
    }
}
