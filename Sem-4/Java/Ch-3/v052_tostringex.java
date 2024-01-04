// ch-3(17)
// java program to show the use of toString() method
class bank {
    String name;
    double balance;

    bank(String name, double balance) {
        this.name = name;
        this.balance = balance;
    }

    public String toString() {
        String msg = "Name is " + name + " and balance is Rs. " + balance;
        return msg;
    }
}

public class v052_tostringex {
    public static void main(String[] args) {
        bank b1 = new bank("Mr.shab ", 5000);
        bank b2 = new bank("Mr.soni", 6000);
        System.out.println("b1 = " + b1);
        System.out.println("b2 = " + b2);
    }
}
