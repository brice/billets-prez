
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
* PHPsh



## Connaitre votre code 

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
* Littéralement le detecteur de bazar (pour être poli)
* Créer un rapport sur les points d'améliorations pour votre code   

Note: J'adore cet utilitaire. Il est facilement customisable, on peut ainsi choisir de tester la propreté du code, sa taille, sa complexité ou son design de façon très flexible. A partir de ça on est libre ou pas de suivre les recommandations. C'est une façon d'identifier les points sensibles et aussi de s'améliorer en tant que développeur.



## Exemple de commandes

```
    $ phpmd fichier.php html cleancode
```



## PHP LOC 

* LOC : Lines Of Codes
* Les stats de votre code
* URL : https://github.com/sebastianbergmann/phploc

Note: Un outil très basique et pourtant très utile. Par le créateur de PHPUnit, phploc permet d'obtenir une topologie de votre projet entre le nombres de lignes de codes, le rapport commentaires/lignes de codes, les classes, leurs types etc... En bref un rapport complet à lancer régulièrement pour visualiser l'évolution de votre code. 


## PHP Metrics

* Analyse du code pour générer un rapport 
* Permet de "dessiner" votre dette technique
* URL : http://www.phpmetrics.org/

Note: Il existe pas mal d'outils plus ou moins complexes pour établir de rapport sur le code. J'aime bien Sonar par exemple dans un contexte d'intégration continuer. PHP Metrics constitue une approche assez simple pour commencer et même continuer car les rapports contiennent beaucoup d'informations. C'est intéressant de dresser un rapport quand on démarre sur un projet ayant déjà une certaines existence. Dans ce cas ne pas hésite aussi à comparer ce que donne le rapport avec le sentiment des "vieux".

 



## Tests

* Objectifs : 
   * Tester votre application 
   * Améliorer la maintenance et la connaissance de l'application
   * Identifier des comportements par le biais d'isolation



## PHP Unit

* Framework de tests unitaires
* Famille des xUnit
* https://phpunit.de/

Note: C'est sans doute le premier framework de tests unitaires que l'on trouve en PHP (mais pas le seul). Développé depuis 2004. Le principe d'un test unitaire est, à mon avis, un indispensable à savoir pour tout développeur. Ne pensez pas que ce n'est pas possible dans votre legacy code au contraire.


## Mode de fonctionnement (hors TDD)

* Identification de ce qu'on veux tester
* Création d'une classe de test
* Execution du code à tester dans la classe de test
* On vérifie le comportement ou les résultats attendus au moyen d'insertion

Note: Voilà ce que j'appelle le mode bourrin, que l'on peut appliquer quand on arrive sur du code legacy (rappel : le code legacy c'est du code non testé définition de Michael Feathers[1. http://www.netobjectives.com/system/files/WorkingEffectivelyWithLegacyCode.pdf]). Vous commencez par identifier une partie de code à tester (par exemple une fonction ou une méthode de classe ou même un constructeur). Puis rédigez une première classe de tests dans laquelle vous allez inclure le fichier où se trouve le code que vous voulez tester. Bien sur il est tout à fait possible (et recommandé) de configurer vos inclusions pour vous éviter tout le boulot d'inclusion et de recherche. Ensuite dans la classe vous executer le bout de code et vérifier les retours par le moyen des assertions.


## Mode de fonctionnement en TDD

* La même chose mais on fait les tests avant

Note: ça c'est le mode idéal, car, dans ce cas, vous commencez par vous poser la question de ce que vous devez faire quand votre cerveau est frais sur une feature et vous vous libérez du temps de cerveau en fin de développement.



## Casper JS

* Utilitaire en javascript
* Permet de scripter des scénarios de navigation web 
* Utilisables avec PhantomJS (WebKit) et slimerJS (moteur Firefox)
* URL : http://www.casperJS.org

Note: Voici un utilitaire très pratique à posséder par devers soi. Il permet d'automatiser des scénarios de navigation. Par exemple pour créer des données de tests, pour naviguer sur des pages webs, pour faire du scraping.


## Casper JS pour les tests

* Librairie d'assertion incluses dans Casper
* Automatisable dans un outil d'intégration continue

Note: Casper permet également de faire des tests automatiques d'interface. De tester la présence d'élements, de remonter les éventuels erreurs javascripts. Pratique en cours de devéveloppement. Attention toutefois à la maintenance. 



## Apache Bench

* Livrer avec Apache
* Utilitaire permettant de bencher votre serveur
* Outil basique mais déjà très complet

Note: Pour finir cette présentation, voici un petit utilitaire livré avec le serveur Apache : Apache Bench. Cet outil permet d'exécuter une cérie de requête à une adresse donné. Il bénéficie d'options simples comme le nombre de requêtes, permet de lancer des opérations concurrentes.  Ça ne remplace pas un processus complet de tests mais permet de tester, au cas par cas, des pages précises et de pouvoir tester également les optimisations.



## Conclusion

* N'hésitez pas à vous servir de ces outils
* Allez en chercher d'autres du même genre
* Créez ceux qui vous manque.



## Questions ?
 
 

