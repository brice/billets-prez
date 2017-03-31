
## Tu peux ~~pas~~ test

Brice Favre - Avril 2017



### Introduction

 * Les tests unitaires : Pourquoi et comment?
 * Expériences et conseils
 * Cas pratiques



### Les familles de test

 * Tests unitaires
 * Tests d'intégration
 * Tests fonctionnels
 * Autres tests (conformité, performance, interface...)


### Les tests unitaires

 * Le test du programmeur
 * Pas forcément automatisé
 * Permet d'anticiper les bugs :)
 * Existe dans tous les langages (même en JS)
 * Souvent mal connu (et encore je vous parle pas de TDD)




### Pourquoi tester?


 ![Parce que](images/parceque.jpg)


### Pourquoi tester?

 * Le gros mot : Qualité (ça veut dire quoi?)
 * La réalité : Affronter ses pires ennemis et se donner confiance


#### Vos pires ennemis :

 * Les bugs
 * Le temps
 * Vous même


 ![Parce Confiance](images/658326.jpg)



### Quoi tester

 * Ce que vous avez développé (TDD)
 * Ce que vous n'avez pas développé (Legacy)
 * Attention à la surqualité



### Avec quoi tester ?

 * Décomposition des outils :
   * Framework de test
   * Runner
   * Librairie d'assertion


### Exemple tout bête

* fichier src/MyClass.php

```$php

class MyClass {

    public function myFunction() {
       // Code
    }
}
```


### Exemple tout bête suite

* fichier test/MyClassTest.php

```$php
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase {

    public function testMyFunction() {
       // Code de test
    }
}
```


### Exemple tout bête fin

* Pour lancer le test

```phpunit --bootstrap src/MyClass.php test/MyClassTest.php```

* Et ça marche (mais bon vous testez rien en même temps)



### Pour finir (avant de pratiquer)

#### [The Way of Testivus](http://www.agitar.com/downloads/TheWayOfTestivus.pdf)


### The way of testivus 1/2

  * Si vous écrivez du code, écrivez des tests
  * Ne vous perdez dans les dogmes du test unitaire
  * Appliquer le karma au test unitaire
  * Pensez au test et au code comme un tout
  * Le test est plus important que l'unité
  * Le meilleur moment pour tester est quand le code est frais


### The way of testivus 2/2

  * Les tests non lancés dépérissent
  * Un test imparfait aujourd'hui est meilleur qu'un test parfait demain
  * Un test horrible est meilleur que pas de tests du tout
  * Parfois, le test justifie les moyens
  * Seuls les fous n'utilisent pas d'outils
  * Les bons tests échouent



### Cas pratiques

* Coding Dojo : Fizz Buzz et Numerals

« Si je veux apprendre le judo, je vais m'inscrire au dojo du coin et y passer une heure par semaine pendant deux ans, au bout de quoi j'aurai peut-être envie de pratiquer plus assidûment. Si je veux apprendre la programmation objet, mon employeur va me trouver une formation de trois jours à Java dans le catalogue 2004. Cherchez l'erreur. » — Laurent Bossavit, président de l'association XP-France (Extreme Programming)



### Webographie

* http://www.arolla.fr/blog/2015/09/pourquoi-tester/
* http://docs.atoum.org/fr/latest/installation.html
* http://www.agitar.com/downloads/TheWayOfTestivus.pdf
* http://thecodelesscode.com/contents
* https://fr.wikipedia.org/wiki/Coding_dojo
* https://jtreminio.com/2013/03/unit-testing-tutorial-introduction-to-phpunit/
* https://www.slideshare.net/nrichand/2010-agile-confrence-comment-vendre-les-tests-automatiss