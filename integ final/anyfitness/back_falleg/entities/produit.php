<?PHP
class Produit  {
  private $id;
  private $nom;
  private $prix;
  private $categorie;
  private $Qt;

  
  function __construct($id,$nom,$prix,$categorie,$Qt){
    $this->id=$id;
    $this->nom=$nom;
    $this->prix=$prix;
    $this->categorie=$categorie;
    $this->Qt=$Qt;
  }
  
  function getid(){
    return $this->id;
  }
  function getnom(){
    return $this->nom;
  }
  function getprix(){
    return $this->prix;
  }
  function getcategorie(){
    return $this->categorie;
  }
  function getQt(){
    return $this->Qt;
  }



  function setid($id){
    $this->id=$id;
  }
  function setnom($nom){
    $this->nom=$nom;
  }
  function setprix($prix){
    $this->prix;
  }
  function setcategorie($categorie){
    $this->categorie=$categorie;

  }
    function setQt($Qt){
    $this->Qt=$Qt;
  }
  
}

?>