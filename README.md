<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">M205: Développer en back end</h1>
<h4 align="center">TP: Laravel (Gestion de bibliothèque)</h4>

<h2>Objectif :</h2>
<p>Créer une application de gestion de bibliothèque en utilisant Laravel et une base de données MySQL.</p>

<h3>1. Créez une base de données MySQL avec les tables suivantes:</h3>
<p>"livres", "auteurs" et "emprunts". La table "livres" doit avoir les colonnes suivantes: id, titre, année de publication, nombre de pages et auteur_id. La table "auteurs" doit avoir les colonnes suivantes: id, nom et prénom. La table "emprunts" doit avoir les colonnes suivantes: id, livre_id, date d'emprunt et date de retour.</p>

<h3>2. Créez un nouveau projet Laravel en utilisant la commande:</h3>
<p>laravel new nom_du_projet</p>

<h3>3. Configurez les informations de connexion à la base de données dans le fichier:</h3>
<p>.env</p>

<h3>4. Créez un modèle Eloquent pour chaque table en utilisant la commande:</h3>
<p>php artisan make:model NomDuModele</p>

<h3>5. Créez un contrôleur "BibliothequeController" en utilisant la commande:</h3>
<p>php artisan make:controller BibliothequeController</p>

<h3>6. Ajoutez des méthodes au contrôleur pour:</h3>
<ul>
  <li>Afficher la liste des livres</li>
  <li>Ajouter un nouveau livre</li>
  <li>Modifier un livre existant</li>
  <li>Supprimer un livre</li>
</ul>
<p>Utilisez les relations entre les tables pour afficher les noms des auteurs dans la liste des livres.</p>

<h3>7. Ajoutez des routes pour chaque méthode du contrôleur. Assurez-vous que les routes sont correctement configurées.</h3>

<h3>8. Créez une vue pour afficher la liste des livres.</h3>
<p>Utilisez les fonctionnalités de pagination de Laravel pour afficher 10 livres par page.</p>

<h3>9. Ajoutez une vue pour ajouter un nouveau livre avec un formulaire permettant de saisir les informations du livre.</h3>

<h3>10. Ajoutez une vue pour modifier un livre existant avec un formulaire pré-rempli avec les informations du livre à modifier.</h3>

<h3>11. Ajoutez une vue de confirmation pour supprimer un livre.</h3>

<h3>12. Utilisez les fonctionnalités de validation de Laravel pour valider les données saisies dans les formulaires.</h3>

<h3>13. Utilisez les migrations Laravel pour créer les tables dans la base de données.</h3>

<h3>14. Créez des relations entre les modèles pour:</h3>
<ul>
  <li>Chaque livre appartient à un auteur</li>
  <li>Chaque emprunt est associé à un livre</li>
</ul>

<h3>15. Ajoutez des méthodes au contrôleur pour:</h3>
<ul>
  <li>Afficher la liste des auteurs</li>
  <li>Ajouter un nouvel auteur</li>
  <li>Modifier un auteur existant</li>
  <li>Supprimer un auteur</li>
</ul>

<h3>16. Ajoutez des vues pour:</h3>
<ul>
  <li>Afficher la liste des auteurs</li>
  <li>Ajouter un nouvel auteur</li>
  <li>Modifier un auteur existant</li>
  <li>Supprimer un auteur</li>
</ul>

<h3>17. Ajoutez des méthodes au contrôleur pour:</h3>
<ul>
  <li>Afficher la liste des emprunts</li>
  <li>Ajouter un nouvel emprunt</li>
  <li>Modifier un emprunt existant</li>
  <li>Supprimer un emprunt</li>
</ul>

<h3>18. Ajoutez des vues pour:</h3>
<ul>
  <li>Afficher la liste des emprunts</li>
  <li>Ajouter un nouvel emprunt</li>
  <li>Modifier un emprunt existant</li>
  <li>Supprimer un emprunt</li>
</ul>

<h3>19. Utilisez les relations entre les modèles pour afficher les informations associées aux emprunts, comme le titre du livre et le nom de l'emprunteur.</h3>

<h3>20. Utilisez les événements Laravel pour enregistrer l'historique des modifications apportées aux livres.</h3>
