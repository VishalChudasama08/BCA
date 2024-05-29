//write rmi program to print message
import java.io.*;
import java.rmi.*;
import java.rmi.server.*;

public interface RMIPracIF extends Remote
{
    public String welcome(String str)throws RemoteException;
}   
    