# my_blog_project
Installation
Pour installer le projet sur votre machine il faut suivre les étapes suivantes :
1- Télécharger le projet sur votre ordinateur
2- Une fois le projet est copié
3- Installer composer dans le projet
4- Copier le fichier .env.example dans .env
5- Créez un fichier database.sqlite dans le répertoire database du projet récuperé
6- Ouvrez le fichier .env et changez le nom de la base de données et le chemin
d’accès
7- Générez une clé :
Php artisan key:generate
8- Lancez les migration
9- Remplissez les seeders
10- Lancez le serveur pour tester l'application
Le menu Home :
Affiche les quatre premiers Articles présents dans notre base de données. Vous
pouvez accéder au contenu de l'Article en cliquant sur son lien, deux cas sont
possibles : Si vous êtes connectée, vous pouvez modifier ou supprimer le contenu de
l'article. Dans ce cas la table article sera mis à jour dans la base de données. Si vous
n'êtes pas connecté, vous pouvez accéder au contenu de l'article sans pouvoir le
modifier ou le supprimer.
Le menu Articles :
Affiche tous les Articles présents dans la base de données (dans notre cas 10 articles).
Si vous étes connecté, vous pouvez modifier ou supprimer le contenu de l'article.
Dans ce cas la table article sera mis à jour dans la base de données. Vous pouvez
accéder au contenu de l'Article en clicant sur son lien, deux cas sont possibles : Si
vous etes connecter, vous pouvez modifier ou supprimer le contenu de l'article. Dans
ce cas la table article sera mis à jour dans la base de données. Si vous n'etes pas

connecté, vous pouvez accéder au contenu de l'article sans pouvoir le modifier ou le
supprimer.
Pour les commentaire : La table comments de la base de données contient par défaut
10 commentaires générés automatiquements. Si vous etes connecté, vous pouvez
commenter les articles en tapant votre nom, votre email, et votre commentaire, dans
ce cas le nombre de commentaire entre les parenthèses s'incrémente, le commentaire
ecris sera affiché au dessous de l'image correspondante à l'article et la table
comments de la base de données sera mis à jour. Si vous n'etes pas connecter, vous
pouvez juste voir les commentaires présents en dessous de chaque image
correspondante à l'article sans pouvoir commenter.
Le menu Contact :
Si vous etes enregistré dans notre base de données et que vous etes connecté, vous
pouvez nous contactez en remplissant le formulaire de contact affiché, si vous envoyé
votre message vous pouvez acceder à un tableau récaputilatif de tout les messages
envoyés sous forme d'un tableau. Dans ce cas la table Contact sera mis à jours dans
la base de données.
Le menu Help :
Ce menu vous dirige vers une assistance d'aide par téléphone ou par mail. Si vous
choisissez le mode mail, vous serez redirigé vers la page de contact.
Le menu Subscribe :
Permet de s'enregistrer si vous n'etes pas enregistrer sur notre base de données en
remplissant un formulaire, dans ce cas la table users sera mis à jours dans la base de
données.
Le Login :
Permet de se connecter pour pouvoir effectuer les opérations citées auparavant.
