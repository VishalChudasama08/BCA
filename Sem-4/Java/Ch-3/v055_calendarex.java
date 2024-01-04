// ch-3(20)
// java program for calender class example...

import java.util.*;

public class v055_calendarex {
    public static void main(String[] args) {
        Calendar cal = Calendar.getInstance();
        // Creating object
        System.out.print("The data is: " + cal.get(Calendar.DATE) + " / ");
        System.out.println(cal.get(Calendar.MONTH) + 1 + " / " + cal.get(Calendar.YEAR));
        cal.set(Calendar.MONTH, 6);
        cal.set(Calendar.DATE, 10);
        System.out.print("The Date is: " + cal.get(Calendar.DATE) + " / ");
        System.out.println(cal.get(Calendar.MONTH) + " / " + cal.get(Calendar.YEAR));
        cal.add(Calendar.MONTH, 2); // add 2 Months...
        System.out.println("After add, the month is: " + cal.get(Calendar.MONTH));
        Date d = cal.getTime(); // returning data object....
        System.out.println("Date is: " + d);
        cal.clear(Calendar.MONTH); // clearing month
        System.out.println("After clear, the month is: " + cal.get(Calendar.MONTH));
    }
}