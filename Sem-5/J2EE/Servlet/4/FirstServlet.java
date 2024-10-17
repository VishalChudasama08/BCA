import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class FirstServlet extends HttpServlet
{
	public void doGet(HttpServletRequest request,HttpServletResponse response) throws ServletException, IOException
	{
		try
		{
			response.setContentType("text/html");
			PrintWriter out=response.getWriter();
			String n=request.getParameter("userName");
			out.print("Welcome    " +n);
			//appending the username in the query string
			out.print("<a href='SecondServlet?uname="+n+"'> visit</a>");
			out.close();
		}
		catch(Exception e) 
		{
		System.out.println(e);
		}
	 }
	}
		
	