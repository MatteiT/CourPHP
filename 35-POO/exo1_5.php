<?php

class Character{

    private $id;
    private $name;
    private $life=100;

    const CEST_MOI = 1;
    const PERSONNAGE_TUE = 2;
    const PERSONNAGE_FRAPPE = 3;

public function __construct($donnees) {
    $this->hydrate($donnees);
}

public function getId(){return $this->id;}
public function getName(){return $this->year;}
public function getLife(){return self::$life;}

public function setId($id){$this->id= $id;}
public function setName($name){$this->name = $name;}
public function setLife($life){self::$life = $life;}

private function dommageTaken(){ 
    $this->life-=5;
    if($this->life <=0)
    {
        return self::PERSONNAGE_TUE;
    }elseif($this->life >0)
    {
        return self::PERSONNAGE_FRAPPE;
    };
}

public function hit(Character $target)
    {
        if($target->id === $this->id){return self::CEST_MOI;}
        else
        {
            return $target->dommageTaken();
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
$manager->add;

class characterManager extends Character{
//  les Querry SQL
private $db;

public function __construct($db) {
    $this->$db=$db;
}

public function add($id) {
$sql = "INSERT INTO tasks (title, user_id) VALUE (:title, :user_id)";
    $stat = $this->db->prepare($sql);
    $stat->execute([
        ":user_id" => $this->$id,
    ]);
}

public function delete($id) {
$sql = "DELETE FROM tasks WHERE task_id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([
        ":id" => $_POST["task_id"]
    ]);
}

public function get($id) {
// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
   $sql = "SELECT * FROM users WHERE name=:name";
        $stat = $this->db->prepare($sql);
        $stat->execute([
            ":name" => $name,
        ]);
        $user= $stat->fetch(PDO::FETCH_ASSOC);
}

public function getList() {
// Retourne la liste de tous les personnages.
   $sql = "SELECT * FROM users WHERE name=:name";
        $stat = $this->db->prepare($sql);
        $stat->execute([
            ":name" => $name,
        ]);
        $user= $stat->fetch(PDO::FETCH_ASSOC);
}

public function update(Character $perso) {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
}


}