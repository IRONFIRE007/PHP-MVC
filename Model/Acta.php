<?php 

/**
* 
*/
class Acta
{
	private $id;
	private $idUser;
    private $asunto;
    private $responsable;
    private $asistentes;
    private $compromisos;
 

    //Constructor
	
	function __construct($id,$idUser,$asunto,$responsable,$asistentes,$compromisos)
	{
		$this->setId($id);
		$this->setIdUser($idUser);
		$this->setAsunto($asunto);
		$this->setResponsable($responsable);	
        $this->setAsistentes($asistentes);
        $this->setCompromisos($compromisos);
	}

    //Get and Setter get id
 
	public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}

  //Get and Setter idUSer

	public function getIdUser(){
		return $this->idUser;
	}
 
	public function setIdUser($idUser){
		$this->idUser = $idUser;
	}


     //Get and Setter Asunto
     
	public function getAsunto(){
		return $this->asunto;
	}
 
	public function setAsunto($asunto){
		$this->asunto = $asunto;
	}
 
     // Get and Setter Responsable
   
	public function getResponsable(){
		return $this->responsable;
	}
 
	public function setResponsable($responsable){
		$this->responsable = $responsable;
	}
 
 // Get and Setter Asistentes

    public function getAsistentes(){
		return $this->asistentes;
	}
 
	public function setAsistentes($asistentes){
		$this->asistentes = $asistentes;
	}

	// Get and Setter Compromisos

    public function getCompromisos(){
		return $this->compromisos;
	}
 
	public function setCompromisos($compromisos){
		$this->compromisos = $compromisos;
	}




  // Saved Acta

	public static function save($acta){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO acta VALUES (NULL,:idUser,:asunto,:responsable,:asistentes,:compromisos)');
		$insert->bindValue('idUser',$acta->getIdUser());
		$insert->bindValue('asunto',$acta->getAsunto());
		// $insert->bindValue('descripcion',$acta->getdescripcion());
		$insert->bindValue('responsable',$acta->getResponsable());
		$insert->bindValue('asistentes',$acta->getAsistentes());
		$insert->bindValue('compromisos',$acta->getCompromisos());
		$insert->execute();
	}
 

 // Get all Actas

	public static function all(){
		$db=Db::getConnect();
		$listaActas=[];
		$select=$db->query('SELECT * FROM acta');
		$select->execute();
 
		foreach($select->fetchAll() as $acta){
			$listaActas[]=new Acta($acta['idActa'],$acta['idUser'],$acta['asunto'],$acta['responsable'],$acta['asistentes'],$acta['compromisos']);
		}
		return $listaActas;
	}

  // Get by ID
 
	public static function searchById($idActa){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM acta WHERE idActa=:idActa');
		$select->bindValue('idActa',$idActa);
		$select->execute();
 
		$actaDb=$select->fetch();
        $acta = new Acta($actaDb['idActa'],$actaDb['idUser'],$actaDb['asunto'],$actaDb['responsable'],$actaDb['asistentes'],$actaDb['compromisos']);

		return $acta;
 
	}


    // Update Acta
 
	public static function update($acta){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE acta SET idUser=:idUser,asunto=:asunto,responsable=:responsable,asistentes=:asistentes,compromisos=:compromisos  WHERE idActa=:id');
		$update->bindValue('idUser',$acta->getIdUser());
		$update->bindValue('asunto',$acta->getAsunto());
		$update->bindValue('responsable',$acta->getResponsable());
		$update->bindValue('asistentes',$acta->getAsistentes());
		$update->bindValue('compromisos',$acta->getCompromisos());
		$update->bindValue('id',$acta->getId());
		$update->execute();
	}


    // Delete Acta
 
	public static function delete($idActa){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM acta WHERE idActa=:idActa' );
		$delete->bindValue('idActa',$idActa);
		$delete->execute();		
	}


}
 
?>