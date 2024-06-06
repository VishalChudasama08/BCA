// write a jdbc code to insert record in database
import java.sql.*;
class pstmtdemo
{
	public static void main(String args[])
	{
		Connection conn;	
		PreparedStatement pstmt;
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			String url="jdbc:odbc:emp";
			conn=DriverManager.getConnection(url);
			String ins="Insert into emp values(?,?,?)";
			pstmt=conn.prepareStatement(ins);	
			pstmt.setInt(1,8);
			pstmt.setString(2,"Vishal");
			pstmt.setFloat(3,500508.12f);
			pstmt.executeUpdate();
			System.out.println("Record inserted");
			conn.close();
		}
		catch(SQLException ex)
		{
			System.out.println("Error in connection :" +ex.getMessage());
		}
		catch(ClassNotFoundException ex)
		{
			System.out.println("Error class not found :"+ ex.getMessage());
		}
	}
}
		