	<?PHP
include_once "../config.php";
class AvisCore {
/*function afficherProduit ($avis){
		//echo "ID: ".$avis->getID()."<br>";
		echo "produit_id: ".$avis->getproduit_id()."<br>";
		echo "Prix: ".$avis->getPrix()."<br>";
		echo "taille: ".$avis->getTaille()."<br>";
		echo "couleur: ".$avis->getCouleur()."<br>";
		echo "couleur: ".$avis->getCouleur()."<br>";
		echo "couleur: ".$avis->getCouleur()."<br>";

	}*/
	
	function ajouterAvis($avis){
		$sql="INSERT into ratings (produit_id,vote) values (:produit_id, :vote)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $produit_id=$avis->getproduit();
        $vote=$avis->getvote();    
		$req->bindValue(':produit_id',$produit_id);
		$req->bindValue(':vote',$vote);
            $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheravis(){
		
		$sql="SELECT * From ratings ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeravis($ID){
		$sql="DELETE FROM ratings where vote_id= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':vote_id',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieravis($avis,$ID){
		$sql="UPDATE ratings SET  produit_id=:produit_id,vote=:vt WHERE vote_id=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $produit_id=$avis->getproduit();
        $vote=$avis->getvote();

		$datas = array( ':ID'=>$ID, ':produit_id'=>$produit_id,':vt'=>$vote);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':produit_id',$produit_id);
		$req->bindValue(':vt',$vote);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereravis($ID){
		$sql="SELECT * from ratings where vote_id=$ID";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeavis_prix($prix){
		$sql="SELECT * from ratings where Prix=$prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeavis_produit_id($produit_id){
		$sql="SELECT * from ratings where produit_id=$produit_id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>