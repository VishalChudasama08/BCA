// write a jdbc code to display the information of database using DatabaseMetaData
import java.sql.*;
public class DatabaseMetaDataDemo
{
	Connection con;
	Statement st;
	DatabaseMetaData dm;
	String query;
	public DatabaseMetaDataDemo()
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			String url="jdbc:odbc:stud";
			con=DriverManager.getConnection(url,"","");
			dm=con.getMetaData();
			System.out.println("DatabaseMetaData Information");
			System.out.println("===========================================");
			System.out.println("Product Name:"+dm.getDatabaseProductName());
			System.out.println("ProductVersion :"+dm.getDatabaseProductVersion());
			System.out.println("Driver Name: " +dm.getDriverName());
			System.out.println("Driver Version :" +dm.getDriverVersion());
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
		public static void main(String args[])
		{
			DatabaseMetaDataDemo cd=new DatabaseMetaDataDemo();
		}
}