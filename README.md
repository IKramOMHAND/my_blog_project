# my_blog_project: 
Projet réalisé dans le cadre de module **Programmation web côté serveur**, grâce au framework Laravel php,  
## présentation du framework Laravel php : 
Laravel est un framework d'application Web qui adopte une achétécture **MVC**. grace à sa syntaxe simple;  il tente à rendre l'éxpérience de developpement  agréable et créative, en simplifiant les tâches courantes utilisées dans la majorité des projets Web. 
# Installation: 
## Pour installer le projet sur votre machine il faut suivre les étapes suivantes :
* Télécharger le projet
* Installer composer dans le projet
* Copier le fichier .env.example dans .env
* Créez un fichier database.sqlite dans le répertoire database du projet récuperé
     * Créez un fichier database.sqlite dans le répertoire database de l’application
     * Modifiez le fichier .env pour spécifier l’utilisation de SQLite et le chemine d’accès au fichier:
       DB_CONNECTION=sqlite
     * DB_DATABASE=/chemin/vers/lapplication/database/database.sqlite
* Ouvrez le fichier .env et changez le nom de la base de données et le chemin
d’accès
* Générez une clé :
Php artisan key:generate
* Lancez les migration
* Remplissez les seeders
* Insttaler **Faker** Cpmmande : On Ubuntu 16.10
     * sudo apt-get install faker
## Pour visualiser le blog : 
### Sous Lunix:
* Lancez le terminal
* s'dentifier en tant que Root 
* Déplacer le dossier my_blog_porject dans le respertoir : /var/www/html
* Aller sur le répétoire courant : 
      * Taper la commande suivante : cd /var/www/html/my_blog_porject/
      * Taper la commande suivante : php artisan serve
      * Cliquer sur le lien pour visialiser le blog
# Fonctionnalités que le Blog Propose :     
## Menu Home : 
Affiche les Trois premiers articles présentent dans la base de donnée ordonnés par date d'édition; 
## Menu articles : 
Afffiche tout les articles dans existant dans la base de donnée, il s'agit de dix articles généés automatiquement grace aux fonctionaliter de **Faker**; 
## Menu article Unique : 
Affiche un seul article avec la possibilité de laisser un commentaire au dessous de chaque article;
## Menu contatc: 
Affiche un formulaire de contact pour que l'utilisateur puisse contacter avec l'administrateur du blog. 

