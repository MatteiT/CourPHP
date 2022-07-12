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
      char_id INTEGER NOT NULL KEY AUTO_INCREMENT,
      name VARCHAR(255) NOT NULL UNIQUE,
      damage TINYINT(3) UNSIGNED NOT NULL DEFAULT "0"
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## Créer une classe Character

## Créer les getters et les setters

## Hydrater la classe

## Créer une classe CharacterManager

Le rôle de la classe Manager est de stocker nos personnages dans une base de données

## Créer le Formulaire
