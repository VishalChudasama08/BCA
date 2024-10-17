import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class showcookies extends HttpServlet
{
	PrintWriter out;
	public void doGet(HttpServletRequest request,HttpServletResponse response)
	throws ServletException, IOException
	{
		try
		{
			response.setContentType("text/html");
			out=response.getWriter();
			out.println("<body>\n" + "<h1 align=\"center\">" +"active cookies"
			+"</h1>\n" + "<table border=1 align=\"center\">\n" +
			"<tr>\n" + " <th>cookie Name\n" +" <th>cookie value");
			Cookie[] cookies=request.getCookies();
			Cookie cookie;
			for(int i=0;i<cookies.length;i++)
			{
				cookie=cookies[i];
				out.println("<tr>\n" +" <td>" + cookie.getName() + "\n"+
				"<td>" +cookie.getValue());
			}
			out.println("</table></body></html>");
		}
		catch(Exception e)
		{
			out.println(e.getMessage());
		}
	}
}
			