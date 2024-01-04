public class v040_throwex1 {
    static void mymethod() {
        try {
            throw new ClassCastException();
        } catch (ClassCastException cce) {
            throw cce; // throwing exception again
        }
    }

    public static void main(String[] args) {
        System.out.println("Throwing exception explicitly.");
        try {
            mymethod();
        } catch (ClassCastException cce) { // catch exception thrown by mymethod()
            System.out.println("Again caught : " + cce);
        }
    }
}
