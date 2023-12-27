// ch-3(5)
// java program having error in catching exception...
public class v037_multiplecatchex1 {
    public static void main(String[] args) {
        int a = 0, b;
        try {
            b = 10 / a;
        } catch (Exception e) { // catching all type of exception, prefer to write last catch block
            System.out.println("Exception is : " + e);
        } catch (ArithmeticException e) { // error
            System.out.println("Division by zero ");
            // this exception has already been caught
        }
    }
}
