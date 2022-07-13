# Cahier des charges

Nous allons créer une sorte de jeu. Chaque visiteur pourra créer un personnage (pas de mot de passe requis pour faire simple) avec lequel il pourra frapper d'autres personnages. Le personnage frappé se verra infliger un certain degré de dégâts.

Un personnage est défini selon 3 caractéristiques :

- Son id
- Son nom (unique)
- Ses dégâts

Les dégâts d'un personnage sont compris entre 0 et 100. Au début, il a bien entendu 0 de dégât. Chaque coup qui lui sera porté lui fera prendre 5 points de dégâts. Une fois arrivé à 100 points de dégâts, le personnage est mort (on le supprimera alors de la BDD).

## Créer la BDD et la table

```
CREATE DATABASE tp_fighting_game;
use tp_fighting_game;
```

```
CREATE TABLE IF NOT EXISTS Characters (
      id INTEGER NOT NULL KEY AUTO_INCREMENT,
      name VARCHAR(255) NOT NULL UNIQUE,
      damage TINYINT(3) UNSIGNED NOT NULL DEFAULT "0"
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## Créer une classe Character

```
class Personnage {

   // attributs
   private $_id,
           $_degats,
           $_nom;

   // Trois constantes de classe renvoyées par la méthode `frapper`
   // si on se frappe soi-même
   const CEST_MOI = 1;
   // si on a tué le personnage en le frappant
   const PERSONNAGE_TUE = 2;
   // si on a bien frappé le personnage
   const PERSONNAGE_FRAPPE = 3;

   // méthode
   public function frapper(Personnage $perso) {
   // renvoie la constante de classe CEST_MOI
   }

   // méthode
   public function recevoirDegats() {
   // renvoie les constantes de classe PERSONNAGE_TUE ou PERSONNAGE_FRAPPE
   }

}
```

## Créer les getters et les setters

## Hydrater la classe

### Donner des valeurs aux attributs

Au début, nous avons un objet Personnage dont les attributs sont vides. L'hydratation consiste à assigner des valeurs aux attributs : nous avons donc hydraté l'objet.

```
class Personnage {
  // ...

  public function hydrate(array $donnees) {
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

  // ...
```

### Constructeur

Il ne manque plus qu'à implémenter le constructeur pour qu'on puisse directement hydrater notre objet lors de l'instanciation de la classe. Pour cela, ajoutez un paramètre : $donnees. Appelez ensuite directement la méthode hydrate().

```
class Personnage {
  // ...

  public function __construct(array $donnees) {
    $this->hydrate($donnees);
  }

  // ...
}
```

## Créer une classe CharacterManager pour gérer la BDD

Le rôle de la classe Manager est de stocker nos personnages dans une base de données.

```
class PersonnagesManager {
  private $_db; // Instance de PDO

  public function __construct($db) {
    $this->setDb($db);
  }

  public function add(Personnage $perso) {
    // Préparation de la requête d'insertion.
    // Assignation des valeurs pour le nom du personnage.
    // Exécution de la requête.

    // Hydratation du personnage passé en paramètre avec assignation de son identifiant et des dégâts initiaux (= 0).
  }

  public function count() {
    // Exécute une requête COUNT() et retourne le nombre de résultats retourné.
  }

  public function delete(Personnage $perso) {
    // Exécute une requête de type DELETE.
  }

  public function exists($info) {
    // Si le paramètre est un entier, c'est qu'on a fourni un identifiant.
      // On exécute alors une requête COUNT() avec une clause WHERE, et on retourne un boolean.

    // Sinon c'est qu'on a passé un nom.
    // Exécution d'une requête COUNT() avec une clause WHERE, et retourne un boolean.
  }

  public function get($info) {
    // Si le paramètre est un entier, on veut récupérer le personnage avec son identifiant.
      // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.

    // Sinon, on veut récupérer le personnage avec son nom.
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
  }

  public function getList($nom) {
    // Retourne la liste des personnages dont le nom n'est pas $nom.
    // Le résultat sera un tableau d'instances de Personnage.
  }

  public function update(Personnage $perso) {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }
}
```

## Créer le Formulaire
