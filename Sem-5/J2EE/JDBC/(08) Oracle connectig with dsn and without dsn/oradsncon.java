//write a jdbc program to connect to the oracle database with dsn
import  java.sql.*;
public class oradsncon
{
   public static void main(String args[])
   {
      try
      {
      // load oracle driver
         Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
      // connect using Thin driver
         Connection con =  DriverManager.getConnection("jdbc:odbc:emp","scott","tiger");
         System.out.println("Connected Successfully To Oracle");
         con.close();
      }
         catch(Exception ex)
         {
            ex.printStackTrace();
         }
   }
}