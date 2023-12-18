final class finalclass {
    int a, b;
}

class class1 extends finalclass { // error: final class can not be extended
    int x, y;
}

public class v028_finalclasstest {
    public static void main(String[] args) {
        class1 ob = new class1();
    }
}