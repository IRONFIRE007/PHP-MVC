<?php 
/**
* 
*/
class User
{
	private $id;
	private $nombre;
	private $apellido;
	private $correo;
 

    //Constructor
	
	function __construct($id, $nombre,$apellido, $correo)
	{
		$this->setId($id);
		$this->setNombre($nombre);
		$this->setApellido($apellido);
		$this->setCorreo($correo);		
	}

    //Get and Setter get id
 
	public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}

     //Get and Setter Nombre
     
	public function getNombre(){
		return $this->nombre;
	}
 
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

    //Get and Setter Apellido
 
	public function getApellido(){
		return $this->apellido;
	}
 
	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
 
     // Get and Setter Correo
   
	public function getCorreo(){
		return $this->correo;
	}
 
	public function setCorreo($correo){
		$this->correo = $correo;
	}
 

  // Saved

	public static function save($user){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO users VALUES (NULL, :nombre,:apellido,:correo)');
		$insert->bindValue('nombre',$user->getNombre());
		$insert->bindValue('apellido',$user->getApellido());
		$insert->bindValue('correo',$user->getCorreo());
		$insert->execute();
	}
 

 // Get all users

	public static function all(){
		$db=Db::getConnect();
		$listaUsers=[];
 
		$select=$db->query('SELECT * FROM users order by idUser');
 
		foreach($select->fetchAll() as $user){
			$listaUsers[]=new User($user['idUser'],$user['Nombre'],$user['Apellido'],$user['correo']);
		}
		return $listaUsers;
	}

  // Get by ID
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM users WHERE idUser=:id');
		$select->bindValue('id',$id);
		$select->execute();
 
		$userDb=$select->fetch();
 
 
		$user = new User ($userDb['idUser'],$userDb['Nombre'], $userDb['Apellido'], $userDb['correo']);

		return $user;
 
	}

    // Update User
 
	public static function update($user){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE users SET Nombre=:nombre, Apellido=:apellido, correo=:correo WHERE idUser=:id');
		$update->bindValue('nombre', $user->getNombre());
		$update->bindValue('apellido',$user->getApellido());
		$update->bindValue('correo',$user->getCorreo());
		$update->bindValue('id',$user->getId());
		$update->execute();
	}


    // Delete User
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM users WHERE idUser=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}
 
?>