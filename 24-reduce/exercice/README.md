## Méthodes sur les tableaux #9

### Créer un tableau Students

1. faire un tableau students avec 5 students
   [
   "id" => 1,
   "name" => 'peter',
   "score" => '80',
   "favoriteSubject" => 'math'
   ],
   ...

### utiliser plusieurs fichiers

- plus facile pour gérer le code (fichier, projet)
- l'ordre à son importance
- autres façons d'arriver au même résultat (fetch BDD)

#### updatedStudents

1. ajouter la propriété role:'student' à chaque objet avec la méthode map
2. l'assigner à la variable 'updatedStudents et l'afficher

#### scores les plus grands

1. filtrer le tableau et retourner seulement les scores >= 80
2. l'assigner à la variable 'highScores' et l'afficher

#### score moyen

1. additionner tous les student.score avec la méthode reduce
2. diviser par la taille du tableau students
3. assigner à la variable 'averagescore' et l'afficher

#### sondage

1. lister les sujets favoris avec reduce
   {
   art: 1,
   history: 1,
   math: 3
   }
2. assigner à la variable survey et l'afficher
