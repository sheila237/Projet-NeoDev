	<?PHP
include_once "../config.php";
class ProduitsCore {
/*function afficherProduit ($produits){
		//echo "ID: ".$produits->getID()."<br>";
		echo "Nom: ".$produits->getNom()."<br>";
		echo "Prix: ".$produits->getPrix()."<br>";
		echo "taille: ".$produits->getTaille()."<br>";
		echo "couleur: ".$produits->getCouleur()."<br>";
		echo "couleur: ".$produits->getCouleur()."<br>";
		echo "couleur: ".$produits->getCouleur()."<br>";

	}*/
	
	function ajouterProduit($produits){
		$sql="INSERT into produits (Nom,Prix,Taille,couleur,stock,etat,id,image) values (:Nom, :Prix,:Taille,:couleur,:stock,:etat,:id,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nom=$produits->getNom();
        $id=$produits->getID();
        $Prix=$produits->getPrix();
        $Taille=$produits->getTaille();
        $couleur=$produits->getCouleur();
        $stock=$produits->getstock();
        $etat=$produits->getetat();
        $image=$produits->getim();      
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':id',$id);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':stock',$stock);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':image',$image);
            $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		
		$sql="SELECT * From produits inner join categorie on produits.id=categorie.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduits($IDP){
		$sql="DELETE FROM produits where IDP= :IDP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDP',$IDP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduits($produits,$IDP){
		$sql="UPDATE produits SET  Nom=:nom,Prix=:pr,Taille=:taille,couleur=:coul ,stock=:st,etat=:et,image=:img WHERE IDP=:IDP";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$produits->getNom();
        $prix=$produits->getPrix();
        $taille=$produits->getTaille();
        $couleur=$produits->getCouleur();
        $stock=$produits->getstock();
        $etat=$produits->getetat();
        $image=$produits->getim();

		$datas = array( ':IDP'=>$IDP, ':nom'=>$nom,':pr'=>$prix,':taille'=>$taille,':coul'=>$couleur,':st'=>$stock, ':et'=>$etat, ':img'=>$image);
		$req->bindValue(':IDP',$IDP);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':pr',$prix);
		$req->bindValue(':taille',$taille);
		$req->bindValue(':coul',$couleur);
		$req->bindValue(':st',$stock);
		$req->bindValue(':et',$etat);
		$req->bindValue(':img',$image);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduits($IDP){
		$sql="SELECT * from produits where IDP=$IDP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduits_prix($prix){
		$sql="SELECT * from produits where Prix=$prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeProduits_nom($nom){
		$sql="SELECT * from produits where Nom=$nom";
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