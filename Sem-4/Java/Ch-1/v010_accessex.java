//010
//simple example of access specifiers....
class simple {
    int i;
    public int j;
    private int k;

    void setvalue(int k) {
        this.k = k;
    }

    int getvalue() {
        return k;
    }
}

public class v010_accessex {
    public static void main(String[] args) {
        simple s = new simple();
        s.i = 10; // can be accessed from any class, same package
        s.j = 20; // can be accessed from any class, any package
        // s.k = 30; //error: cant access k as it is private
        s.setvalue(30); // setvalue() has default access
        System.out.println("i = " + s.i);
        System.out.println("j = " + s.j);
        System.out.println("k = " + s.getvalue()); // getvalue has default access
    }
}
