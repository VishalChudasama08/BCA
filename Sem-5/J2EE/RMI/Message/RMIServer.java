import java.rmi.*;
import java.rmi.server.*;

public class RMIServer extends RMIIFImpl
{
    RMIServer()throws Exception
	{
	}

	public static void main(String a[])throws Exception
    {
        RMIIFImpl ri=new RMIIFImpl();
        Naming.rebind("StudName",ri);
	System.out.println("Server initiated....");
    }
}