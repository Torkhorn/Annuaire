Attention : depuis la maj 1.6 d'Angular, l'url est (public)/#!/concept

prérequis :

-npm (nodejs)
-composer

initialisation projet :

répertoire racine -> composer install
		  ->php artisan key:generate

créer fichier .env (copie du fichier .env.example)
Le .env contiendra le Identifiants à la BDD

ANGULAR :

ceux qui travaillent sur Angular vont dans le repertoire public/app 
les dossier views et controllers

Définir le host dans app.js(app.constant) en fonction du répertoire du projet.

Backend :

ceux qui travaillent partie back-end vont dans le répertoire app à la racine
les fichiers modeles sont dans /app
et les controleurs (ceux qui renvoient des data.json) se trouvent dans /app/http
Pour créer un controleur avec Laravel on peut utiliser la cmd php artisan make:controller {Nom}Controller



