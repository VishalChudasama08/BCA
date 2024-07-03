// write a jdbc code to display records from student table in mysql without using dsn
import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.SQLException;
 
public class HomeWork_mysqldsnless {
	public static void main(String[] argv) throw Exception
		Class.forName("com.mysql.jdbc.Driver");
		Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/forjava","root","");
		statement = connection.createStatement();
		rs = statement.executeQuery("select * from student");
		while(rs.next()){
			System.out.println("Employee rollNumber :"+rs.getInt(1));
			System.out.println("Employee Name :" + rs.getString(2));
			System.out.println("Employee mobileNumber :"+rs.getInt(3));
		}
	}
}