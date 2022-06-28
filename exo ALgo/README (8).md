# Algorithmie

## Les variables

1. Écrire un alogrithme qui échange les valeurs de deux variables $a et $b.

2. Modifier le code ci-dessous pour calculer la moyenne des notes.

<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = 0;
   echo 'La moyenne est de '.$moyenne.' / 20.';
?>

3. Calculer le prix TTC du produit.

<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = 0;
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>

## Les Conditions

4. Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

5. Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure.

6. Écrire une fonction qui prend en paramètre un nombre et qui retourne vrai si il est positif sinon faux.(on laisse de côte le cas où le nombre est null)

## Les boucles

7. Écrire une fonction qui prend en paramètre un nombre et affiche les dix suivants.

8. Écrire une fonction qui prend en paramètre un nombre et qui retourne la somme des entiers jusqu'à ce nombre. Par exemple avec 5 :

   1 + 2 + 3 + 4 + 5 =15

On veut n'afficher que le résultat.

9. Écrire une fonction qui prend en paramètre un nombre et qui retourne sa factorielle. Par exemple avec 8 :

1 x 2 x 3 x 4 x 5 x 6 x 7 x 8 = 40320

10. En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 77.

11. Écrire une fonction qui prend en paramètre un nombre et qui affiche sa table de multiplication comme suit :

table de 7 :
7 x 1 = 7
7 x 2 = 14
...
7x 10 = 70

12. En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous :

1
22
333
4444
55555

13. Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :

- l'afficher ;
- incrémenter sa valeur de 2 ;

Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.

## Les Tableaux

14. Écrire une fonction qui prend un tableau en paramètre qui retourne le 3ème élément.

15. Écrire une fonction qui prend un tableau et un nombre en paramètre, et qui retourne le tableau avec le nombre ajouté à la fin de celui-ci.

16. Écrire une fonction qui prend un tableau en paramètre, supprime le 5ème élément et retourne le nouveau tableau.

17. Écrire une fonction qui prend un tableau en paramètre et retourne sa somme.

18. Déclarer une variable de type array qui stocke les informations suivantes :

France : Paris
Allemagne : Berlin
Italie : Rome

Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.

19. En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec var_dump.

20. En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.

<?php
  $pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
  );
?>

21. En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.

<?php
  $pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
  );
?>
