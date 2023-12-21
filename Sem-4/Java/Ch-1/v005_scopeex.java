//005
//an example to temonstrate the scope of the variable
class v005_scopeex {
    public static void main(String[] args) {
        int a = 10;
        if (a > 5) {
            int b = 20;
            System.out.println("a = " + a + " and " + "b = " + b);
            a++;
        } // the block ends... and b variable scope ends
        System.out.println("a is " + a);
        // System.out.println("b is " + b);
        // this line showing error becose b scope not here, end on its block,
        // *any varible scope end with it's block*
    }

    static void scope() {
        int c = 30;
        System.out.println(c); // not print becose not colling this method
        // System.out.println("a is " + a); // error : a scope is not here....
    }
}
