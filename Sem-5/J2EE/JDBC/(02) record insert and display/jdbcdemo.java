// write a jdbc code to display records from the table using dsn
import java.sql.*;
class jdbcdemo
{
	public static void main(String args[])
	{
	Connection conn;
	Statement stmt;
	ResultSet rs;
	try
	{
		Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
		String url="jdbc:odbc:emp";
		conn=DriverManager.getConnection(url);
		stmt=conn.createStatement();
		rs=stmt.executeQuery("select * from emp");
		while(rs.next())
		{
			System.out.println("Employee no. :"+rs.getInt(1));
			System.out.println("Employee Name :" + rs.getString(2));
			System.out.println("Employee salary:"+rs.getFloat(3));
		}
		rs.close();
		stmt.close();
		conn.close();
	}
	catch(SQLException ex)
	{
		System.out.println("Error in connection :"+ex.getMessage());
	}
	catch(ClassNotFoundException ex)
	{
		System.out.println("Error class not found :"+ex.getMessage());
	}
	}
}