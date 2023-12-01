//007
//simple basic arithmetic calculations...
public class basiccalculation {
    public static void main(String[] args) {
        // integer mode arithmetic...
        System.out.println("calculation in integer mode \n");
        int num1 = 10;
        int num2 = 5;
        int add, sub, mul, div, unaryplus, unaryminus;
        add = num1 + num2; // addition
        sub = num1 - num2; // substraction
        mul = num1 * num2; // multiply
        div = num1 / num2; // division
        unaryplus = +num1; // unaryplus
        unaryminus = -num2; // unaryplus
        System.out.println("Addition is : " + add);
        System.out.println("Substraction is : " + sub);
        System.out.println("Multiplay is : " + mul);
        System.out.println("Division is : " + div);
        System.out.println("unaryplus is : " + unaryplus);
        System.out.println("unaryminus is : " + unaryminus);

        // real mode arithetic...
        System.out.println("\n calculation As in real (floating point) mode \n");
        double n1 = 10, n2 = 5;
        double a, s, m, d, uplus, uminus;
        a = n1 + n2;
        s = n1 - n2;
        m = n1 * n2;
        d = n1 / n2;
        uplus = +n1;
        uminus = -n2;
        System.out.println("Addition is : " + a);
        System.out.println("Subsraction is : " + s);
        System.out.println("Multiplay is : " + m);
        System.out.println("Division is : " + d);
        System.out.println("unaryplus is : " + uplus);
        System.out.println("unaryminus is : " + uminus);
    }
}
