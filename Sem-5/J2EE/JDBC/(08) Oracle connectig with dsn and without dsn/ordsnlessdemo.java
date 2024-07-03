//write a jdbc program to connect to oracle database without dsn
import  java.sql.*;

public class ordsnlessdemo
{
   public static void main(String args[])
   {
      try
      {
      // load oracle driver
         Class.forName("oracle.jdbc.driver.OracleDriver");
      // connect using Thin driver
         Connection con =  DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","scott","tiger");
         System.out.println("Connected Successfully To Oracle");
         con.close();
      }
         catch(Exception ex)
         {
            ex.printStackTrace();
         }
   }
}