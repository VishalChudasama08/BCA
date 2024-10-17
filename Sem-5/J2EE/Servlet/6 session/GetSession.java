import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class GetSession extends HttpServlet
{
	public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException
	{
		response.setContentType("text/plain");
		PrintWriter out=response.getWriter();
		HttpSession session=request.getSession(true);
		out.println("ID : " + session.getId());
		out.println("Name= " + session.getAttribute("Name").toString());
	}
}