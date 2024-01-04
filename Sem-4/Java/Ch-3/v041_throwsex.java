class testclass {
    void testmethod() throws ClassNotFoundException {
        throw new ClassNotFoundException("class not found");
    }
}

public class v041_throwsex {
    public static void main(String[] args) {
        testclass t = new testclass();
        try {
            System.out.println("calling testmethod().");
            t.testmethod();
        } catch (ClassNotFoundException e) {
            System.out.println("Exception : " + e);
        }
    }
}
