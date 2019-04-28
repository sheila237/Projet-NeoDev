<?PHP
include "config.php";

class CategoriesC {
function afficherCategorie ($categories){
		echo "type: ".$categories->getType()."<br>";
		//echo "ID: ".$categories->getID()."<br>";

	}
	
	function ajouterCategorie($categories){
		$sql="INSERT into categorie (type) values ( :type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $type=$categories->gettype();
        // $id=$categories->getID();
		$req->bindValue(':type',$type);
		//$req->bindValue(':id',$id);
		
            $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		
		$sql="SELECT * From categorie ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($id){
		$sql="DELETE FROM categorie where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategories($categorie,$id){
		$sql="UPDATE categorie SET  type=:type WHERE id=:id";
		
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
		//$id=$categorie->getID();
        $type=$categorie->gettype();
		$datas = array(':id'=>$id, ':type'=>$type);
		//$req->bindValue(':id',$id);
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategories($id){
		$sql="SELECT * from categorie where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategories_mar($type){
		$sql="SELECT * from categorie where type=$type";
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