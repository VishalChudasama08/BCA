//write a jdbc code to display insert update and delete records from the table using dsn
import java.io.*;
import java.util.*;
import java.sql.*;
class se_in_up_de
{
	public static void main(String args[])
	{
		try
		{
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection cn = DriverManager.getConnection("jdbc:odbc:emp");
	Statement st = cn.createStatement();
		int empno;
		int empsal;
		String empname;
		int ch;
		do
		{
System.out.println("\n1.Display The Record\n2.Insert The Record\n3.Update The Record\n4.Delete The Record\n5.Exit");
	System.out.print("\nEnter your Choice : ");
	ch=Integer.parseInt(br.readLine());
	System.out.println("\n");
                  switch(ch)
	{
	case 1:
       ResultSet rs=st.executeQuery("select * from emp");
	while(rs.next())
	{
        System.out.println("Employee no. \t: " + rs.getInt(1));
System.out.println("Employee Name \t: " + rs.getString(2));
  System.out.println("Employee Salary : " + rs.getFloat(3) +"\n");
	}
                  rs.close();
	break;
	case 2:
	System.out.print("Enter Employee no. \t: ");
	empno=Integer.parseInt(br.readLine());
	System.out.print("Enter Employee Name \t: ");
	empname=br.readLine();
	System.out.print("Enter Employee Salary : ");
	empsal=Integer.parseInt(br.readLine());
	st.executeUpdate(("insert into emp values ("+empno+",'"+empname+"',"+empsal+")"));
	System.out.println("Record Inserted");
	break;
	case 3:
	System.out.print("Enter employee No which you want to update := ");
	empno=Integer.parseInt(br.readLine());
System.out.print("\nEnter employee Name for update :=> ");
	empname=br.readLine();
st.executeUpdate(("update emp set empname = '"+empname+"' where empno=" +empno));
	System.out.println("Record Updated");
	break;
	case 4:
	System.out.print("Enter employee No which you want to Delete := ");
	empno=Integer.parseInt(br.readLine());
st.executeUpdate("delete from emp where empno="+empno);
	System.out.println("Record Deleted");
	break;
	case 5:
	System.out.println("Exit");
	break;
	}
	}while(ch!=5);
		}
		catch(Exception ex)
		{
		System.out.println("Exception : " +ex);
		}
	}
}
