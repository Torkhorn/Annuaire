Attention : depuis la maj 1.6 d'Angular, l'url est (public)/#!/concept

pr�requis :

-npm (nodejs)
-composer

initialisation projet :

r�pertoire racine -> composer install
		  ->php artisan key:generate

cr�er fichier .env (copie du fichier .env.example)
Le .env contiendra le Identifiants � la BDD

ANGULAR :

ceux qui travaillent sur Angular vont dans le repertoire public/app 
les dossier views et controllers

D�finir le host dans app.js(app.constant) en fonction du r�pertoire du projet.

Backend :

ceux qui travaillent partie back-end vont dans le r�pertoire app � la racine
les fichiers modeles sont dans /app
et les controleurs (ceux qui renvoient des data.json) se trouvent dans /app/http
Pour cr�er un controleur avec Laravel on peut utiliser la cmd php artisan make:controller {Nom}Controller



