//write a servlet code which show the use of addCookie method of HttpservletResponse interface
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class setcookie extends HttpServlet
{
	public void doGet(HttpServletRequest request,HttpServletResponse response)
	throws ServletException, IOException
	{
		for(int i=0;i<3;i++)
		{
			Cookie cookie=new Cookie("Session-cookie-" +i,"Cookie-value-s" +i);
			response.addCookie(cookie);
			cookie=new Cookie("persistent-cookie-" + i,"Cookie-value-p" + i);
			cookie.setMaxAge(3600);
			response.addCookie(cookie);
		}
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		out.println("<html><body>\n" +"<h1 align=\"center\">" +
			     "setting cookies" + "</h1>\n"+
			    "there are six cookeis associated with this page.\n"+
			    "to see them,visit the\n"+ "<a href=\"showcookies\">\n"+
			    "<code>showcookies</code>servlet</a>.\n"+ "<p> \n"+
				"three of the cookies are associated only with the\n"+
				"current session,while three are persistent.\n"+
				"quit the browser,restart and return to the \n"+
				"<code>showcookies</code>servlet to verify that \n" +
				"the three long-lived ones persist across session.\n"+
				"</body></html>");
		}
}
			