// write a servlet cpde to print hello mdg on web page
// generet class file and move it in tomcat\webapps\ROOT\WEB-INF\classes\
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

// Extend HttpServlet class
public class HelloWorld extends HttpServlet {
	private String message;
	public void init() throws ServletException {
		// do required initialization
		message = "Hello Student Learning Servlet in j2ee";
	}
	public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// set response content here.
		response.setContentType("text/html");
		
		// Actual logic goes here.
		PrintWriter out = response.getWriter();
		out.println("<h1>" + message + "</h1>");
	}
	public void destroy(){
		// do nothing
	}
}