// ch-2(19)
// java program to show the use of multiple catch blocks
public class v039_multiplecatchex {
    public static void main(String[] args) {
        int a = 0, b;
        try {
            b = Integer.parseInt(args[0]);
            // first command-line argument
            a = 10 / b;
        } catch (ArithmeticException e) {
            System.out.println("Divide by zero ");
            a = 0;
        } catch (ArrayIndexOutOfBoundsException e) {
            System.out.println("plase give at leas't one command-line argument.");
        }
        System.out.println("a = " + a);
    }
}
/*
 * VS code Terminal =>
 * PS D:\Happy_Coding\With_Github\BCA> cd Sem-4\Java
 * PS D:\Happy_Coding\With_Github\BCA\Sem-4\Java> javac
 * .\v039_multiplecatchex.java
 * PS D:\Happy_Coding\With_Github\BCA\Sem-4\Java> java .\v039_multiplecatchex 10
 * Error: Could not find or load main class .\\v039_multiplecatchex
 * Caused by: java.lang.ClassNotFoundException: /\\v039_multiplecatchex
 * PS D:\Happy_Coding\With_Github\BCA\Sem-4\Java> java v039_multiplecatchex 10
 * a = 1
 * PS D:\Happy_Coding\With_Github\BCA\Sem-4\Java>
 */