// ch-3(8)
// java program  to show the creating of our own exception...

import java.util.*; // access all java util files

class ownexception extends Exception {
    boolean state;

    ownexception(boolean state) {
        this.state = state;
    }

    public String toString() {
        return "ownexception occured with " + state;
    }
}

public class v043_customexceptionex {
    static void test(boolean state) throws ownexception {
        if (state == false) {
            throw new ownexception(state);
        } else {
            System.out.println("No exception.");
        }
    }

    public static void main(String[] args) {
        boolean state;
        try {
            Random r = new Random();
            state = r.nextBoolean();
            test(state);
        } catch (ownexception e) {
            System.out.println("exception: " + e);
        }
    }
}