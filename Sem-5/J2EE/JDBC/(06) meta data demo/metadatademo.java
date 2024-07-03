// write a jdbc code to display the information of table using ResultSet
import java.sql.*;
public class metadatademo
{
	Connection con;
	Statement st;
	ResultSet rs;
	ResultSetMetaData rsm;
	String query;
	public metadatademo()
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			String url="jdbc:odbc:emp";
			con=DriverManager.getConnection(url,"","");
			st=con.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_UPDATABLE);
			rs=st.executeQuery("select * from emp");
			rsm=rs.getMetaData();
			System.out.println("No.of columns are:"+rsm.getColumnCount());
			int y=rsm.getColumnCount();
			for(int i=1;i<=y;i++)
			{
				String cnm=rsm.getColumnName(i);
				System.out.println("column Name is:"+cnm);
				String tnm=rsm.getTableName(i);
				System.out.println("table Name is:"+tnm);
			}
		}
		catch(Exception e)
		{
			System.out.println("error :"+e);
		}
	}
	public static void main(String args[])
	{
		metadatademo rd=new metadatademo();
	}
}