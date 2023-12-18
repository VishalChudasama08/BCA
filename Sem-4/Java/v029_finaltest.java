class test {
    final void finalmethod() { // finalmethod is final
        System.out.println("final method can not be overridden");
    }
}

class test1 extends test {
    void finalmethod() { // error: overriding final method
        System.out.println("overriding final method");
    }
}

public class v029_finaltest {
    public static void main(String[] args) {
        test1 t = new test1();
        t.finalmethod();
    }
}
