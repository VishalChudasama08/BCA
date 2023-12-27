// ch-3 (6)
// Java program for show the use of nested try blocks
public class v038_nestedtryex {
    public static void main(String[] args) {
        int a = 0, b;
        try {
            a = 10 / args.length; // generate divide by zero if no comman-line argument is given
            System.out.println("a = " + a);
            try {
                b = Integer.parseInt(args[1]);
                System.out.println("B = " + b);
                a = 12 / 0; // generate arithmetic exception
            } catch (ArrayIndexOutOfBoundsException e) { // exception of only inner try
                System.out.println("Array index is out of limits");
            }
        } catch (ArithmeticException ae) { // This catch block catches exception of both try
            System.out.println("Divide by zero Exception");
        }
    }
}
