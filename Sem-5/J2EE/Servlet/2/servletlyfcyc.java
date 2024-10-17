//write a servlet code to show the working of servlet life cycle.

import java.io.*;
import javax.servlet.*;
public class servletlyfcyc extends GenericServlet
{
	int count;
	public void init(ServletConfig config) throws ServletException
	{
		super.init(config);
		count=1;
	}
	public void service(ServletRequest req,ServletResponse res)
	throws ServletException, IOException
	{
		res.setContentType("text/plain");
		PrintWriter out=res.getWriter();
		out.println("Value of count is:"+count++);
	}
	public void destroy()
	{
		System.out.println("destroyed");
	}
}