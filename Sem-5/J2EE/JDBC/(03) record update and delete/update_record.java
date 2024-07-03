// write a jdbc code to update record in the table using dsn
import java.io.*;
import java.util.*;
import java.sql.*;

class update_record {
    public static void main(String args[]) {
        try {
            Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
            Connection cn = DriverManager.getConnection("jdbc:odbc:emp");
            Statement st = cn.createStatement();
            
            BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
            
            System.out.print("\nEnter employee No. Which u want to Update :=> ");
            int rno = Integer.parseInt(br.readLine());
            System.out.println();
            System.out.print("Enter employee name for Update:=> ");
            String str = br.readLine();
            System.out.print("Enter employee salary for Update:=> ");
            double sal = Double.parseDouble(br.readLine());
                        
            try {
                int x = st.executeUpdate("update emp set name='" + str + "', salary='" + sal + "' where no=" + rno);
				System.out.println(x);
                System.out.println("\n---------------------------------------------------------");
                System.out.println("No. of Rows Affected :- [ " + x + " ] ");
                System.out.println("---------------------------------------------------------");
            } catch (Exception e) {
                System.out.println("Trouble :=> " + e);
            }
            
            st.close();
            cn.close();
        } catch (Exception e) {
            System.out.println("Trouble :=> " + e);
        }
    }
}
