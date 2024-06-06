import java.rmi.*;

public class BankServer
{
	public static void main(String args[])
	{
		try
		{
			BankImpl bankimpl=new BankImpl();
			Naming.rebind("BankServer",bankimpl);
			System.out.println("Serevr is ready");
		}

		catch(Exception e)
		{
			System.out.println("Exception :"+e);
		}	
	}
} 