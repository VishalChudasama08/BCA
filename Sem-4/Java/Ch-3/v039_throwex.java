public class v039_throwex {
    public static void main(String[] args) {
        System.out.println("Throwing exception exlicity.");
        try {
            throw new ArithmeticException("divide by zero");
        } catch (ArithmeticException ae) {
            System.out.println("Exceptoin is : " + ae);
        }
    }
}
