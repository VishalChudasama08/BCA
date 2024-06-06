// write a jdbc code to make connection with database using dsn
import java.sql.*;
class condemo
{
	public static void main(String args[])
	{
		Connection con=null;
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			con=DriverManager.getConnection("jdbc:odbc:stud");
			System.out.println("connection with database");
		}
		catch(ClassNotFoundException ce)
		{
			System.out.println(ce);
		}
		catch(SQLException se)
		{
			System.out.println(se);
		}
		catch(Exception e)
		{	
			System.out.println(e);
		}
	}
}