//write a jdbc program to connect with mysql database with dsn
import  java.sql.*;
public class mysqldsncon
{
   public static void main(String args[])
   {
      try
      {
      // load mysql driver
         Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
      // connect using Thin driver
         Connection con =  DriverManager.getConnection("jdbc:odbc:dsn_name","root","");
         System.out.println("Connected Successfully To mysql database");
         con.close();
      }
         catch(Exception ex)
         {
            ex.printStackTrace();
         }
   }
}