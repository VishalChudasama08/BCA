import java.rmi.*;
import java.rmi.server.*;

public class RMIClient
{
	private static final String HOST_NAME="localhost";
	public static void main(String arg[]) throws Exception
    {
       
        try
        {
            RMIPracIF r = (RMIPracIF)Naming.lookup("//"+HOST_NAME+"/StudName");
            String s1 = r.welcome("jitu sir");
			
            System.out.println(s1);
        }
        catch(Exception e)
        {
            e.printStackTrace();
        }
    }

}