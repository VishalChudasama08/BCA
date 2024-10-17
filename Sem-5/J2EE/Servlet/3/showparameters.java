import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
public class showparameters extends HttpServlet
{
	public void doGet(HttpServletRequest request,HttpServletResponse response)
	throws ServletException, IOException
	{
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		String title="reading all request parameters";
		out.println("<body>\n" +"<h1 align=center>" +title +"</h1>\n"+
		"<table border=1 align=center>\n" +"<tr>\n" +
		"<th>parameter Name<th>parameter value(s)");
		Enumeration paramNames=request.getParameterNames();
		while(paramNames.hasMoreElements())
		{
			String paramName=(String)paramNames.nextElement();
			out.print("<tr><td>" + paramName + "\n</td><td>");
			String[] paramValues=request.getParameterValues(paramName);
			String paramvalue=paramValues[0];
			if(paramvalue.length()==0)
				out.println("<i> No Value</i></td>");
				else
				out.println(paramvalue+"</td>");
		}
		out.println("</table>\n</body>></html>");
	}
	public void doPost(HttpServletRequest request,HttpServletResponse response)
	throws ServletException, IOException
	{
		doGet(request,response);
	}
}