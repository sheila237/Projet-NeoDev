<?PHP
class Produits{
	protected $IDP;
	protected $nom;
	protected $prix;
	protected $taille;
	protected $couleur;
	protected $stock;
	protected $etat;
	protected $id;
	protected $image;

	function __construct($nom,$pr,$taille,$couleur,$stock,$etat,$i,$im){
		$this->nom=$nom;
		$this->prix=$pr;
		$this->taille=$taille;
		$this->couleur=$couleur;
		$this->stock=$stock;
		$this->etat=$etat;
		$this->id=$i;	
		$this->image=$im;	

	}
	
	function getIDp(){
		return $this->IDP;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}
	function getTaille(){
		return $this->taille;
	}
    function getCouleur(){
		return $this->couleur;
	}

    function getstock(){
		return $this->stock;
	}

    function getetat(){
		return $this->etat;
	}			
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrix($prix){
		$this->prix;
	}
	function setTaille($taille){
		$this->taille=$taille;
	}
	 function setCouleur($couleur){
		$this->couleur=$couleur;
	}

	 function setstock($st){
		$this->stock=$st;
	}	

	 function setetat($et){
		$this->etat=$et;
	}	
	function getID(){
		return $this->id;
	}
	function setID($i){
		$this->id=$i;	}

	function getim(){
		return $this->image;
	}
	function setim($im){
		$this->image=$im;	}
}

?>