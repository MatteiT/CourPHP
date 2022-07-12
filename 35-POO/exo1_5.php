<?php
require_once("PDO.php");

class Character{

    public $id;
    public $name;
    public static $life=100;

public function __construct($id, $name, $life)
{
    self::$life-=5;
    $this->dammage=$dammage;
    $this->name=$name;
    $this->id=$id;
}
    public function getId(){return $this->id;}
    public function getName(){return $this->year;}
    public function getAtk(){return self::$atk;}

    public function setId($id){$this->id= $id;}
    public function setYear($name){$this->name = $name;}
    public function setPrice($life){self::$life = $life;}

function death(Character )
{
    if(($this->$life)<=0)
    {
    $death=true;
    echo "le perso est mort";
    }
}

}

function Hit(Character $target)
{
($target->life)
return ;
}
$perso1= new Character(1, "bob", 100);
$perso2= new Character(1, "tom", 100);


class characterManager extends Character{
//  les Querry SQL

public function add(Personnage $perso) {
$sql = "INSERT INTO tasks (title, user_id) VALUE (:title, :user_id)";
    $stat = $pdo->prepare($sql);
    $stat->execute([
        ":title" => $task,
        ":user_id" => $_SESSION['user']['user_id'],
    ]);
}

public function delete(Character $perso) {
$sql = "DELETE FROM tasks WHERE task_id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id" => $_POST["task_id"]
    ]);
}

public function get($id) {
// Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
   $sql = "SELECT * FROM users WHERE name=:name";
        $stat = $pdo->prepare($sql);
        $stat->execute([
            ":name" => $name,
        ]);
        $user= $stat->fetch(PDO::FETCH_ASSOC);
}

public function getList() {
// Retourne la liste de tous les personnages.
   $sql = "SELECT * FROM users WHERE name=:name";
        $stat = $pdo->prepare($sql);
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