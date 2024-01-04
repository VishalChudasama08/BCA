// ch-3(22)
// java program for a simple stack example...

import java.util.*;

public class v057_stackex {
    public static void main(String[] args) {
        Stack st = new Stack();
        st.push(123);
        st.push("Welcome");
        st.push("MM");
        System.out.println("Stack is empty: " + st.empty());
        System.out.println("Stack elemrnts are: ");
        for (int i = 1; i <= 3;) {
            System.out.println(st.pop() + "____");
        }
        System.out.println();
        System.out.println("After pop, stack is empty: " + st.empty());
        st.push("xyz");
        st.push("Stack");
        st.push(789);
        st.push(34.56);
        System.out.println("The xyz is at: " + st.search("xyz"));
    }
}