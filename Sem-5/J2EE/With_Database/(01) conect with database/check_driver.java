// write a jdbc code to check driver of the system
import java.sql.*;
import java.util.*;

class check_driver
{
   public static void main(String args[])
    {
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Enumeration d=DriverManager.getDrivers();
			System.out.println("Driver Avilable \t:=> "+d);
			while(d.hasMoreElements())
			{
				Driver dr=(Driver) d.nextElement();
				System.out.println("Drivers Name \t\t:=> "+dr.getClass().getName());
				System.out.println("Major Version \t\t:=> "+dr.getMajorVersion());
				System.out.println("Minor Version \t\t:=> "+dr.getMinorVersion());
				System.out.println("Support Java Component\t:=> "+dr.jdbcCompliant());
			}
		}
		catch(Exception e)	
		{	
			System.out.println("exception="+e);
		}
	}	
}
			