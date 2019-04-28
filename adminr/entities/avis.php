<?PHP
class Avis{
	private $ID;
	private $vote;
	protected $produit_id;

	function __construct($vote,$produit_id){
		$this->vote=$vote;
		$this->produit_id=$produit_id;

	}
	
	function getID(){
		return $this->ID;
	}
	function getvote(){
		return $this->vote;
	}
	function getproduit(){
		return $this->produit_id;
	}			
	function setvote($vote){
		$this->vote=$vote;
	}
	function setproduit($produit_id){
		$this->produit_id=$produit_id;
	}
}

?>