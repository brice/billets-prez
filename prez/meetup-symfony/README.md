
## Outils de QA

### Mon couteau suisse QA

Brice Favre - Janvier 2017
 



## Me, Myself and I

* Développeur et responsable QA - Ami Software
* Cofondateur AFUP Montpellier
* Papa Geek
* @briceatwork

Note: A noter que Ami Software cherche des développeuses/développeurs et que l'AFUP est à la recherche d'oratrice et d'orateur.




## Introduction

* Lister des outils simples
* A utiliser au quotiden
* Dans un objectif de qualité

Note: Je dresse ici la liste des outils que j'utilise plus ou moins souvent. Pourquoi? Je me rends compte que leurs utilisations est plus ou moins connu et puis celà permet de détailler quelques concepts liés à ces outils. Les outils seront triés par deux catégories : la qualité du code lui même et les tests qui vise à vérifier la conformité du code par rapport aux fonctionnalités attendues. Bien sur c'est une liste non exhaustive


## Informations générales
 
 * Outils en PHP (généralement) mais aussi en Javascript
 * Facile à déployer (Merci Composer et Phar)
    
    ```bash
    $ cd /usr/local/bin 
    $ sudo wget outil.phar
    $ sudo chmod a+x outil.phar
    $ sudo ln -s outil.phar outil

    ```

 * A utiliser sans modération pour mieux connaitre votre code et mieux coder
 
Note: Je ne rentrerais pas dans les détails des outils. Je vais suivre une grille pour parler de l'outil, de son utilisation et des actions qu'ils peuvent vous aider à faire. De manière générale ces outils sont en PHP, il sont téléchargeable sous forme de fichier phar qu'il suffit de placer sur votre répertoire /usr/local/bin et vous pouvez commencer à les utiliser. Selon les cas certains outils utilisent composer ou npm et ce n'est guère plus compliqué.




## L'inclasssable


## PHP - Mode Interactif

```bash
$ php -a
  Interactive mode enabled
  
  php > echo "Hello World";
  Hello World
  php > 
```

Note: 


## Autre outil

* Boris
* PHP en CLI



## Connaitre votre code 

* Point de départ : Définir une convention avec votre équipe
* Objectif de ces outils 
   * Vérifier la conformité du code 
   * Faire des stats 
   * Identifier les points de complexité




## PHP Code Sniffer

* phpcs pour les intimes
* Outil de vérification de conformité à la convention choisie
* Assurer que le code reste propre et consistant
* https://github.com/squizlabs/PHP_CodeSniffer

Note: Il s'agit d'un très ancien outil (il était déjà dans PEAR mais désormais ) toujours bon pied bon oeil. Par défaut il propose différents standard de code pré-installé (PEAR, PHPCS, PSR1, 2 et Zend) mais on peut en ajouter d'autres ou créer le sien propre. Le plus simple pour un démarrage de projet est encore d'en choisir une (genre PSR1 ou PSR2).

## PHP Code Beautifier

* Livré avec phpcs
* Permet de corriger automatiquement les violations

Note: On fait tous des erreurs quand on code, PHP CBF permet de corriger les violations et les erreurs que l'on fait par rapport aux standards (genre les espaces n'est ce pas Jérelou). Toutefois tous n'est pas corrigeable par du script. C'est un outil intéressant une fois qu'on a fixé les conventions pour se libérer l'esprit mais certains IDE peuvent faire le boulot aussi.

## Exemple de commandes
 
 

## PHP Mess Detector

* PHP MD
* Littéralement le décteur de bazar (pour être poli)
* Créer un rapport sur les points d'améliorations pour votre code   

Note: J'adore cet utilitaire. Il est facilement customisable, on peut ainsi choisir de tester la propreté du code, sa taille, sa complexité ou son design de façon très flexible. A partir de ça on est libre ou pas de suivre les recommandations. C'est une façon d'identifier les points sensibles et aussi de s'améliorer en tant que développeur.


## Exemple de commandes

```
    $ phpmd fichier.php html cleancode
```

## PHP LOC



## PHP Metrics 



## Tests

* Objectifs : 
   * Tester votre application 
   * Améliorer la maintenance et la connaissance de l'application



## PHP Unit



## Behat



## Casper JS



## Apache Bench



## Questions ?
 
 

