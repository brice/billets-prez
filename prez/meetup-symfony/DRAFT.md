vu que j'ai pas commité mes élements, voici un petit draft avec quelques notes diverses

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


## PHP Unit

* Framework de test unitaire
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
