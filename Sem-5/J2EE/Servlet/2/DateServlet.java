//servlet code to display the current time in string representation
import java.io.*;
import java.util.Date;
import java.util.Hashtable;

import javax.servlet.*;
import javax.servlet.http.*;

public class DateServlet extends HttpServlet 
{
    public void service(HttpServletRequest req, HttpServletResponse res)
	throws ServletException, IOException
    {
        Date today = new Date();
        res.setContentType("text/plain");

        ServletOutputStream out = res.getOutputStream();
        out.println(today.toString());
    }

    public String getServletInfo() 
   {
        return "Returns a string representation of the current time";
    }

}