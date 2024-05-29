//write a rmi program to display addition of two variables
import java.rmi.*;

public interface AddServerIntf extends Remote
 {
  double add(double d1, double d2) throws RemoteException;
}
