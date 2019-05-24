import java.rmi.Remote;

public interface RelojInterface extends Remote {
	public String getFecha();
}

//
import java.rmi.server.UnicastRemoteObject;
import java.text.SimpleDateFormat;
import java.util.Date;

public Relok extends UnicastRemoteObject implements RelojInterface {
	public String getFecha() {
		SimpleDateFormat sdi = new SimpleDateFormat("dd/mm/yyyy");
		String fecha = sdf.ormat(new Date());	
	}
}