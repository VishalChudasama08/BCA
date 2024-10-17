//write a serlvet code to show the use of the HttpSession interface
import java.io.*;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class SessionServlet extends HttpServlet
{
	public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException
{
	response.setContentType("text/html");
	PrintWriter out=response.getWriter();
	HttpSession session=request.getSession(true);
	String name="smt.j.j.k.c.c bca sem 5.";
	session.setAttribute("Name",name);
	Date created=new Date(session.getCreationTime());
	Date accessed=new Date(session.getLastAccessedTime());
	out.println("<html><body>");
	out.println("ID : " +session.getId() +"<br>");
	out.println("Created : "+ created + "<br>");
	out.println("Last Accessed : " + accessed+ "<br>");
	out.println("<A HREF=\"GetSession\">GetSession</A>");
	out.println("</body></html>");
}
}