import java.rmi.*;
import java.rmi.server.*;

public class RMIIFImpl extends UnicastRemoteObject implements RMIPracIF
{
   
    public RMIIFImpl()throws RemoteException
	{
	}

    public String welcome(String str)
    {
        String res="Hi," + str + " have a great time with the J2EE RMI World";
        return res;
    }
}