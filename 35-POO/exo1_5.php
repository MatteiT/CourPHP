<?php

class Character{

    private $id;
    private $name;
    private $damage=100;

    const CEST_MOI = 1;
    const PERSONNAGE_TUE = 2;
    const PERSONNAGE_FRAPPE = 3;

public function __construct($donnees) {
    $this->hydrate($donnees);
}

public function getId(){return $this->id;}
public function getName(){return $this->year;}
public function getLife(){return self::$damage;}

public function setId($id){$this->id= $id;}
public function setName($name){$this->name = $name;}
public function setDamage($damage){self::$damage = $damage;}

private function dammageTaken(){ 
    $this->damage+=5;
    if($this->damage >=100)
    {
        return self::PERSONNAGE_TUE;}
    elseif($this->damage >0)
    {
        return self::PERSONNAGE_FRAPPE;
    };
}

public function hit(Character $target)
    {
        if($target->id === $this->id){return self::CEST_MOI;}
        else
        {
            return $target->dammageTaken();
        }
    }



public function hydrate($donnees) {
    foreach ($donnees as $key => $value) {
        $method = 'set'.ucfirst($key);

        if (method_exists($this, $method))
        {
        $this->$method($value);
        }
        }
}

}


//$manager= new $characterManager($pdo)
// $manager->add;

class characterManager extends Character{
//  les Querry SQL
private $db;

public function __construct($db) {
    $this->$db=$db;
}

public function setDb(PDO $db) {
$this->_db = $db;
}

public function count() {
    $stmt= $this->db->query("SELECT COUNT (*) FROM characters");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return "Il y a $rows perso";
}

// Si le paramètre est un entier, c'est qu'on a fourni un identifiant.
  // On exécute alors une requête COUNT() avec une clause WHERE, et on retourne un boolean.

// Sinon c'est qu'on a passé un nom.
// Exécution d'une requête COUNT() avec une clause WHERE, et retourne un boolean.
public function exists($info) {

    if (is_int($info)) { 
    $sql= ('SELECT COUNT(*) FROM characters WHERE id =:id');
        $stat=$this->db->prepare($sql);
    $stat->execute([
        ':id' => $info
    ]);
    return;
    }elseif(is_string($info)){
    $sql= ('SELECT COUNT(*) FROM characters WHERE nom=:nom');
    $stat=$this->db->prepare($sql);
    $stat->execute([
        ':nom' => $info
    ]);
    return;
}
}


public function add(Character $target) {
    $sql = "INSERT INTO characters (name, char_id) VALUE (:name, :id)";
    $stat = $this->db->prepare($sql);
    $stat->execute([
        ":name" => $target->name,
        ":id" =>$target->id,
    ]);
}

public function delete(Character $target) {
$sql = "DELETE FROM characters WHERE char_id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([
        ":id" => $target->id
    ]);
}

public function get($id) {
// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
   $sql = "SELECT * FROM characters WHERE name=:name";
        $stat = ($this->db)->prepare($sql);
        $stat->execute([
            ":name" => $this->damage,
        ]);
        $user= $stat->fetch(PDO::FETCH_ASSOC);
        $id=$user['char_id'];
}

public function getList() {
// Retourne la liste de tous les personnages.
   $sql = "SELECT * FROM characters ORDER BY char_id";
        $stat = $this->db->prepare($sql);
        $user= $stat->fetchall(PDO::FETCH_ASSOC);
        
}

public function update(Character $target) {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
    $sql = "UPDATE characters SET name=:name, damage=:damage WHERE char_id=:id";
        $stat = $this->db->prepare($sql);
        $stat->execute([
            ":name" => $target->name,
            ":damage" => $this->damage,
        ]);
}


}