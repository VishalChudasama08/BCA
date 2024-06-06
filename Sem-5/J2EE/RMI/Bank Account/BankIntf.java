write a rmi program to prepare bank application
import java.rmi.*;
public interface BankIntf extends Remote
{
	int withdraw(int a,int amt)throws RemoteException;
	int deposit(int b,int amt)throws RemoteException;
	int balance(int amt)throws RemoteException;
} 