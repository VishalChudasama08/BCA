// 035 ch-2(18)
// java program for printing the description exseption...
public class v038_exceptionex2 {
    public static void main(String[] args) {
        int a, b;
        a = 123;
        try {
            b = a / 0; // diride by zero
            System.out.println("b= " + b);
        } catch (ArithmeticException e) {
            System.out.println("Exception is : " + e); // printing exception
            a = 0;
        }
        System.out.println("a= " + a);
    }
}
