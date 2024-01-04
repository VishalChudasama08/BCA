// ch-3(13)
// java program to show the length and capacity of StringBuffer object
public class v048_stringbufferex {
    public static void main(String[] args) {
        StringBuffer sb1 = new StringBuffer();
        StringBuffer sb2 = new StringBuffer();
        StringBuffer sb3 = new StringBuffer("Computer");
        System.out.println("sb1: Length = " + sb1.length() + ", Capacity = " + sb1.capacity());
        System.out.println("sb2: Length = " + sb2.length() + ", Capacity = " + sb2.capacity());
        System.out.println("sb3: Length = " + sb3.length() + ", Capacity = " + sb3.capacity());
        sb3.ensureCapacity(50);
        sb3.setLength(15);
        System.out.println("Now sb3: Length = " + sb3.length() + ", Capacity = " + sb3.capacity());
        StringBuffer str = new StringBuffer("Welcome");
        System.out.println("String : " + str);
        str.setLength(3);
        System.out.println("Now String: " + str);
    }
}
