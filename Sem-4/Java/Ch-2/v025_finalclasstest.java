//025
//jav program for making the class final class

final class finalclass {
    int a, b;
}

class class1 extends finalclass { // error: final class can not be extended
    int x, y;
}

public class v025_finalclasstest {
    public static void main(String[] args) {
        class1 ob = new class1();
    }
}