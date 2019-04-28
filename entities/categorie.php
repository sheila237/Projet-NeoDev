<?PHP
//include "produit.php";

class Categories {
	private $ID;
	private $type;
	function __construct($ty){
		//$this->ID=$ID;
		$this->type=$ty;

	}
	
	function getID(){
		return $this->ID;
	}
	function gettype(){
		return $this->type;
	}
	function settype($ty){
		$this->type=$ty;
	}
}

?>