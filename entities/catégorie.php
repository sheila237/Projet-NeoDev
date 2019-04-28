<?PHP
//include "produit.php";

class Categories {
	private $id;
	private $mariee;
	private $soiree;
	function __construct($id,$ma,$soi){
		$this->id=$id;
		$this->mariee=$ma;
		$this->soiree=$soi;

	}
	
	function getID(){
		return $this->id;
	}
	function getMariee(){
		return $this->mariee;
	}
	function getSoiree(){
		return $this->soiree;
	}
	
	function setSoiree($soi){
		$this->soiree=$soi;
	}
	 function setMariee($ma){
		$this->mariee=$ma;
	}
}

?>