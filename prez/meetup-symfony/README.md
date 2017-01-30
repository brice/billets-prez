
## Outils de QA

### Mon couteau suisse QA

Brice Favre - Janvier 2017
 



## Me, Myself and I

* Développeur et responsable QA - Ami Software
* Cofondateur AFUP Montpellier
* Twitter : @briceatwork 

Note: A noter que Ami Software cherche des développeuses/développeurs et que l'AFUP est à la recherche d'oratrice et d'orateur.




## Introduction

* Lister des outils simples
* A utiliser au quotiden
* Dans un objectif de qualité

Note: Je dresse ici la liste des outils que j'utilise plus ou moins souvent. Pourquoi? Je me rends compte que leurs utilisations est plus ou moins connu et puis celà permet de détailler quelques concepts liés à ces outils. Les outils seront triés par deux catégories : la qualité du code lui même et les tests qui vise à vérifier la conformité du code par rapport aux fonctionnalités attendues. Bien sur c'est une liste non exhaustive


## Informations générales
 
 * Outils en PHP (généralement)
 * Facile à déployer (Merci Composer et Phar)
    
    ```bash
    $ cd /usr/local/bin 
    $ sudo wget outil.phar
    $ sudo chmod a+x outil.phar
    $ sudo ln -s outil.phar outil

    ```

 * Ligne de commande (mais ça va aller)
 * A utiliser sans modération pour mieux connaitre votre code et mieux coder
 
Note: Je ne rentrerais pas dans les détails des outils. Je vais suivre une grille pour parler de l'outil, de son utilisation et des actions qu'ils peuvent vous aider à faire. De manière générale ces outils sont en PHP, il sont téléchargeable sous forme de fichier phar qu'il suffit de placer sur votre répertoire /usr/local/bin et vous pouvez commencer à les utiliser. Selon les cas certains outils utilisent composer ce n'est guère plus compliqué.


## Pourquoi faire ?

* Vérifier la conformité aux standards de développement
* Mieux connaitre votre code
* Identifier les points d'amélioration d'un projet
* Faciliter la maintenance et le refactoring
* S'améliorer en tant que développeur

Note: Voici une liste (non exhaustive) de conséquences positives lié à l'utilisation de ces outils. Le point préalable est de dresser vous même la liste des objectifs que vous vous donnez ou que l'équipe se donne sur un projet. C'est ainsi qu'il est important de définir des conventions dans une équipe pour assurer une cohérence dans le code produit.  



## L'inclassable


## PHP - Mode Interactif

```bash
$ php -a
  Interactive mode enabled
  
  php > echo "Hello World";
  Hello World
  php > 
```

Note: Pour commencer partons avec un outil de base qu'on néglige un peu. PHP offre, en ligne de commande, une console pour tester des fonctions. Pratique pour tester rapidement un bout de code dont on est pas sur à 100% ou reporter des bouts de code que vous pouvez trouver au fin fond d'un projet. 


## Autre outil

* Boris : https://github.com/borisrepl/boris
* PHPsh : http://www.phpsh.org/
* repl.it : https://repl.it/languages/PHP




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

```bash

$ phpcs -i
  The installed coding standards are MySource, PEAR, PHPCS, PSR1, PSR2, Squiz and Zend

$ phpcs --standard=PSR2 AppBundle.php

FILE: /var/www/symfony/AppBundle.php
----------------------------------------------------------------------
FOUND 8 ERRORS AFFECTING 8 LINES
----------------------------------------------------------------------
 13 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 14 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 15 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 17 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 18 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 20 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 21 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
 22 | ERROR | [x] Spaces must be used to indent lines; tabs are not
    |       |     allowed
----------------------------------------------------------------------
PHPCBF CAN FIX THE 8 MARKED SNIFF VIOLATIONS AUTOMATICALLY
----------------------------------------------------------------------
```


## Exemple de commandes suite

```bash

$ phpcbf  --standard=PSR2 AppBundle.php

Processing AppBundle.php [PHP => 161 tokens in 23 lines]... DONE in 6ms (8 fixable violations)
        => Fixing file: 0/8 violations remaining [made 2 passes]... DONE in 12ms
Patched 1 file
Time: 117ms; Memory: 5M
```



## PHP Mess Detector

* PHP MD
* Littéralement le detecteur de bazar (pour être poli)
* Créer un rapport sur les points d'améliorations pour votre code   

Note: J'adore cet utilitaire. Il est facilement customisable, on peut ainsi choisir de tester la propreté du code, sa taille, sa complexité ou son design de façon très flexible. A partir de ça on est libre ou pas de suivre les recommandations. C'est une façon d'identifier les points sensibles et aussi de s'améliorer en tant que développeur.


## Exemple de commandes

```
    $phpmd
      Mandatory arguments:
      1) A php source code filename or directory. Can be a comma-separated string
      2) A report format
      3) A ruleset filename or a comma-separated string of rulesetfilenames

      Available formats: xml, text, html.
      Available rulesets: cleancode, codesize, controversial, design, naming, unusedcode.

      Optional arguments that may be put after the mandatory arguments:
      --minimumpriority: rule priority threshold; rules with lower priority than this will not be used
      --reportfile: send report output to a file; default to STDOUT
      --suffixes: comma-separated string of valid source code filename extensions, e.g. php,phtml
      --exclude: comma-separated string of patterns that are used to ignore directories
      --strict: also report those nodes with a @SuppressWarnings annotation
      --ignore-violations-on-exit: will exit with a zero code, even if any violations are found

    $ phpmd init.inc.php html cleancode

./init.inc.php:173        Avoid using static access to class '***' in method '***_autoload'.
./init.inc.php:174        Avoid using static access to class '***Log' in method '***_autoload'.
./init.inc.php:397        Avoid using static access to class '***' in method 'VersionDB'.
./init.inc.php:405        The method CheckVersion has a boolean flag argument $eq, which is a certain sign of a Single Responsibility Principle violation.
./init.inc.php:486        The method GetSrcPersPath has a boolean flag argument $****, which is a certain sign of a Single Responsibility Principle violation.
...

    $ phpmd init.inc.php html codesize

./init.inc.php:131        The function ***_autoload() has a Cyclomatic Complexity of 34. The configured cyclomatic complexity threshold is 10.
./init.inc.php:228        The class *** has 1075 lines of code. Current threshold is 1000. Avoid really long classes.
./init.inc.php:228        The class *** has 62 public methods and attributes. Consider reducing the number of public items to less than 45.
./init.inc.php:228        The class *** has 37 non-getter- and setter-methods. Consider refactoring *** to keep number of methods under 25.
./init.inc.php:228        The class *** has 37 public methods. Consider refactoring *** to keep number of public methods under 10.
./init.inc.php:228        The class *** has an overall complexity of 284 which is very high. The configured complexity threshold is 50.
./init.inc.php:262        The method Version() has 100 lines of code. Current threshold is set to 100. Avoid really long methods.
./init.inc.php:535        The method GetSrcCachePath() has a Cyclomatic Complexity of 17. The configured cyclomatic complexity threshold is 10.
./init.inc.php:535        The method GetSrcCachePath() has an NPath complexity of 1224. The configured NPath complexity threshold is 200.
./init.inc.php:751        The method backtrace() has a Cyclomatic Complexity of 24. The configured cyclomatic complexity threshold is 10.
./init.inc.php:751        The method backtrace() has an NPath complexity of 50712. The configured NPath complexity threshold is 200.

```



## PHP LOC 

* LOC : Lines Of Codes
* Les stats de votre code
* URL : https://github.com/sebastianbergmann/phploc

Note: Un outil très basique et pourtant très utile. Par le créateur de PHPUnit, phploc permet d'obtenir une topologie de votre projet entre le nombres de lignes de codes, le rapport commentaires/lignes de codes, les classes, leurs types etc... En bref un rapport complet à lancer régulièrement pour visualiser l'évolution de votre code. 


## Exemple de commandes

```
$ phploc app

Directories                                          7
Files                                               33

Size
  Lines of Code (LOC)                            58147
  Comment Lines of Code (CLOC)                   15930 (27.40%)
  Non-Comment Lines of Code (NCLOC)              42217 (72.60%)
  Logical Lines of Code (LLOC)                   14007 (24.09%)
    Classes                                      13421 (95.82%)
      Average Class Length                          58
        Minimum Class Length                         0
        Maximum Class Length                      1213
      Average Method Length                          2
        Minimum Method Length                        0
        Maximum Method Length                      438
    Functions                                      337 (2.41%)
      Average Function Length                        0
    Not in classes or functions                    249 (1.78%)

Cyclomatic Complexity
  Average Complexity per LLOC                     0.29
  Average Complexity per Class                   18.21
    Minimum Class Complexity                      1.00
    Maximum Class Complexity                    342.00
  Average Complexity per Method                   1.83
    Minimum Method Complexity                     1.00
    Maximum Method Complexity                   342.00

Dependencies
  Global Accesses                                    5
    Global Constants                                 4 (80.00%)
    Global Variables                                 1 (20.00%)
    Super-Global Variables                           0 (0.00%)
  Attribute Accesses                             12299
    Non-Static                                   12198 (99.18%)
    Static                                         101 (0.82%)
  Method Calls                                    7562
    Non-Static                                    7470 (98.78%)
    Static                                          92 (1.22%)

Structure
  Namespaces                                        50
  Interfaces                                        40
  Traits                                             1
  Classes                                          187
    Abstract Classes                                17 (9.09%)
    Concrete Classes                               170 (90.91%)
  Methods                                         3947
    Scope
      Non-Static Methods                          3922 (99.37%)
      Static Methods                                25 (0.63%)
    Visibility
      Public Methods                              2967 (75.17%)
      Non-Public Methods                           980 (24.83%)
  Functions                                        433
    Named Functions                                 54 (12.47%)
    Anonymous Functions                            379 (87.53%)
  Constants                                         64
    Global Constants                                 9 (14.06%)
    Class Constants                                 55 (85.94%)

```



## PHP Metrics

* Analyse du code pour générer un rapport 
* Permet de "dessiner" votre dette technique
* URL : http://www.phpmetrics.org/

Note: Il existe pas mal d'outils plus ou moins complexes pour établir de rapport sur le code. J'aime bien Sonar par exemple dans un contexte d'intégration continuer. PHP Metrics constitue une approche assez simple pour commencer et même continuer car les rapports contiennent beaucoup d'informations. C'est intéressant de dresser un rapport quand on démarre sur un projet ayant déjà une certaines existence. Dans ce cas ne pas hésite aussi à comparer ce que donne le rapport avec le sentiment des "vieux".


## Exemple

* [Exemple de rapport](./myreport.html)



## Apache Bench

* Livré avec Apache
* Utilitaire permettant de bencher votre serveur
* Outil basique et pratique

Note: Voici un petit utilitaire livré avec le serveur Apache : Apache Bench. Cet outil permet d'exécuter une série de requêtes à une adresse donnée. Il bénéficie d'options simples comme le nombre de requêtes, permet de lancer des opérations concurrentes.  Ça ne remplace pas un processus complet de tests mais permet de tester, au cas par cas, des pages précises et de pouvoir tester également les optimisations.


## Exemple

```
$ ab -n 1000 -c 10 http://localhost/
 
This is ApacheBench, Version 2.3 <$Revision: 1663405 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)
Completed 100 requests
Completed 200 requests
Completed 300 requests
Completed 400 requests
Completed 500 requests
Completed 600 requests
Completed 700 requests
Completed 800 requests
Completed 900 requests
Completed 1000 requests
Finished 1000 requests

Server Software:        Apache
Server Hostname:        localhost
Server Port:            80

Document Path:          /
Document Length:        959 bytes

Concurrency Level:      10
Time taken for tests:   0.178 seconds
Complete requests:      1000
Failed requests:        0
Non-2xx responses:      1000
Total transferred:      1219000 bytes
HTML transferred:       959000 bytes
Requests per second:    5610.26 [#/sec] (mean)
Time per request:       1.782 [ms] (mean)
Time per request:       0.178 [ms] (mean, across all concurrent requests)
Transfer rate:          6678.61 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.0      0       0
Processing:     0    2   6.4      1      65
Waiting:        0    2   6.3      1      64
Total:          0    2   6.4      1      65

Percentage of the requests served within a certain time (ms)
  50%      1
  66%      1
  75%      1
  80%      1
  90%      2
  95%      3
  98%      6
  99%     64
 100%     65 (longest request)
```

Note: Voilà un test très simple mais qui permet de présenter les options principales d'un outil tel que ab. On peut déterminer le nombre de requêtes à faire, le nombre de requêtes parrallèles. Pratique pour vérifier si telle ou telle page s'écroule devant la pression. 



## PHP Unit

* Framework de tests unitaires
* Famille des xUnit
* https://phpunit.de/

Note: C'est sans doute le premier framework de tests unitaires que l'on trouve en PHP (mais pas le seul). Développé depuis 2004. Le principe d'un test unitaire est, à mon avis, un indispensable à savoir pour tout développeur. Ne pensez pas que ce n'est pas possible dans votre legacy code au contraire.


## Mode de fonctionnement

* Identification de ce qu'on veux tester
* Création d'une classe de test
* Execution du code à tester dans la classe de test
* On vérifie le comportement ou les résultats attendus au moyen d'assertions

Note: Voilà ce que j'appelle le mode bourrin, que l'on peut appliquer quand on arrive sur du code legacy (rappel : le code legacy c'est du code non testé définition de Michael Feathers[1. http://www.netobjectives.com/system/files/WorkingEffectivelyWithLegacyCode.pdf]). Vous commencez par identifier une partie de code à tester (par exemple une fonction ou une méthode de classe ou même un constructeur). Puis rédigez une première classe de tests dans laquelle vous allez inclure le fichier où se trouve le code que vous voulez tester. Bien sur il est tout à fait possible (et recommandé) de configurer vos inclusions pour vous éviter tout le boulot d'inclusion et de recherche. Ensuite dans la classe vous executer le bout de code et vérifier les retours par le moyen des assertions.


## Exemple de classe à tester

* Attention ne faites pas ça chez vous

```php
class CrappyClass
{
	public function __construct()
	{
		$this->toto = DEMO_CRAPPY_DEFINE;
	}

	public static function CrappyStaticFunction($params)
	{
		if ($params) {
			return $params;
		}
		return false;
	}

	public function CrappyPublicFunction()
	{
		return $this->CrappyPrivateFunction();
	}

	private function CrappyPrivateFunction()
	{
		return $this->toto;
	}
}
```


## Exemple de test

* Ça vous pouvez le faire :)

```php

include('src/CrappyClass.php');

class CrappyClassTest extends PHPUnit_Framework_TestCase
{
	private static $value = 'dummy test';

	public static function setUpBeforeClass()
	{
		if(!defined('DEMO_CRAPPY_DEFINE')) {
			define('DEMO_CRAPPY_DEFINE', self::$value);
		}
	}

	public function testConstructor()
	{
		$crap = new CrappyClass();

		$this->assertInstanceOf(CrappyClass::class, $crap);
		$this->assertEquals(self::$value, $crap->toto);
	}

	public function testStaticFunction()
	{
		$params = [1];
		$this->assertEquals($params, CrappyClass::CrappyStaticFunction($params));
		$this->assertFalse(CrappyClass::CrappyStaticFunction(''));
		$this->assertFalse(CrappyClass::CrappyStaticFunction([]));
	}

	public function testFunctions()
	{
		$crap = new CrappyClass();
		$this->assertEquals(self::$value, $crap->CrappyPublicFunction());
	}
}
```



## Conclusion

* N'hésitez pas à vous servir de ces outils
* Allez en chercher d'autres du même genre
* Créez ceux qui vous manque.



## Questions ?
 
 

