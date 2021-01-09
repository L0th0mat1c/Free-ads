<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center"><a href="https://imgbb.com/"><img src="https://i.ibb.co/PMRrfkj/Annunciati.png" alt="Annunciati" border="0" /></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# A propos d'Annunciati 

Annunciati est un site gratuit de publication de petites annonces. Les visiteurs peuvent consulter les annonces postées par les autres utilisateurs du site et peuvent récupérer leurs coordonnées. 
La création d'un espace utilisateur est proposée pour la publication d'annonces sur le site.

Annunciati veut dire "Annonce-toi" en Italien.

Bonne visite

# A propos des développeurs

Le site a été développé par Loïc THOMAS, Joseph SALEON-TERRAS et Hugues LAMBOLEZ dans le cadre de la coding academy d'Epitech Toulouse (promotion octobre 2020).

Loïc est un ancien militaire, Joseph est un ancien chef cuisinier et Hugues est un ancien juriste.

# Outils utilisés

Liste des outils et technologies utilisés lors du projet :
- Laravel 8 (framework)
- Trello (gestion de projet)
- GitHub (gestion du versionning)
- Creatly (création de diagrammes)
- Mysql (gestion de base de données)
- PhpUnit (testing)
- Bootstrap (Front end)

# Procédure d'installation automatisée du site #

Pour tester Annunciati, veuillez suivre les étapes suivantes :

1. Cloner le répertoire git où vous le souhaitez.
2. Placer-vous dans le dossier cloné.
3. Lancer la commande suivante : "./kickstart_annunciati.sh"
    > Il sera peut-être nécessaire d'autoriser préalablement l'exécution du script *.sh* en tant que programme
4. Vous recevrez un message de confirmation dans le terminal une fois le site installé.


# Procédure en cas d'échec de l'installation automatique #

En cas de défaillance de l'installation automatique proposée, pour initialiser Annunciati, vous pouvez faire les étapes suivantes :

1. Cloner le répertoire git où vous le souhaitez.
2. Placer-vous dans le dossier cloné.
3. Lancer  =>  ``` composer require laravel/ui ```
    > Laravel/ui va s'installer.
4. Lancer  => ``` echo "create database annoncedb | sudo mysql -u root -p" ```
    > Si cette étape ne fonctionne pas, vous devez lancer mysql et créer une table "annoncedb" vierge.
5. Lancer  => ``` php artisan migrate:fresh ```
    > Les migrations de base vont s'effectuer
6. Lancer  => ``` php artisan db:seed ```
    > La base de donnée va être alimentée d'un set d'annonce et d'utilisateurs exemple
7. Lancer  => ``` php artisan serve ```
    > Lance le serveur