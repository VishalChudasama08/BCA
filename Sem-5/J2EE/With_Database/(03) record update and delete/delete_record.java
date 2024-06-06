// write a jdbc code to delete record from the table using dsn
import java.io.*;
import java.util.*;
import java.sql.*;

class delete_record
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection cn=DriverManager.getConnection("jdbc:odbc:emp");
			Statement st=cn.createStatement();
			
						
			try
			{
				int x=st.executeUpdate("delete from emp where empno=1");
				System.out.println("No. of Rows Affected :- [ " + x + " ] ");
			}
			catch(Exception e)
			{
				System.out.println("Trouble :=> "+e);
			}
			
			st.close();
			cn.close();
		}
		
		catch(Exception e)
		{
			System.out.println("Trouble :=> "+e);
		}
	}
}
						