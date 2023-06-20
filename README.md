<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

 M205 : Développer en back end
<h4> TP : Laravel (Gestion de bibliothèque) </h1><br>
<h2>Objectif : Créer une application de gestion de bibliothèque en utilisant Laravel et une base de données MySQL.</h2><br><br>
<h3>1. Créez une base de données MySQL avec les tables suivantes: "livres", "auteurs" et "emprunts". La table "livres" doit avoir les colonnes suivantes: id, titre, année de publication, nombre de pages et auteur_id. La table "auteurs" doit avoir les colonnes suivantes: id, nom et prénom. La table "emprunts" doit avoir les colonnes suivantes: id, livre_id, date d'emprunt et date de retour.
2. Créez un nouveau projet Laravel en utilisant la commande laravel new nom_du_projet.<br><br>
3. Configurez les informations de connexion à la base de données dans le fichier .env.<br><br>
4. Créez un modèle Eloquent pour chaque table en utilisant la commande php artisan make:model NomDuModele.<br><br>
5. Créez un contrôleur "BibliothequeController" en utilisant la commande php artisan make:controller BibliothequeController.<br><br>
6. Ajoutez des méthodes au contrôleur pour afficher la liste des livres, ajouter un nouveau livre, modifier un livre existant et supprimer un livre. Utilisez les relations entre les tables pour afficher les noms des auteurs dans la liste des livres.<br><br>
7. Ajoutez des routes pour chaque méthode du contrôleur. Assurez-vous que les routes<br><br>
8. Créez une vue pour afficher la liste des livres. Utilisez les fonctionnalités de pagination de Laravel pour afficher 10 livres par page.<br><br>
9. Ajoutez une vue pour ajouter un nouveau livre avec un formulaire permettant de saisir les informations du livre.<br><br>
10. Ajoutez une vue pour modifier un livre existant avec un formulaire pré-rempli avec les informations du livre à modifier.<br><br>
11. Ajoutez une vue de confirmation pour supprimer un livre.<br><br>
12. Utilisez les fonctionnalités de validation de Laravel pour valider les données saisies dans les formulaires.<br><br>
13. Utilisez les migrations Laravel pour créer les tables dans la base de données.<br><br>
14. Créez des relations entre les modèles pour que chaque livre appartienne à un auteur et pour que chaque emprunt soit associé à un livre.<br><br>
15. Ajoutez des méthodes au contrôleur pour afficher la liste des auteurs, ajouter un nouvel auteur, modifier un auteur existant et supprimer un auteur.<br><br>
16. Ajoutez des vues pour afficher la liste des auteurs, ajouter un nouvel auteur, modifier un auteur existant et supprimer un auteur.<br><br>
17. Ajoutez des méthodes au contrôleur pour afficher la liste des emprunts, ajouter un nouvel emprunt, modifier un emprunt existant et supprimer un emprunt.<br><br>
18. Ajoutez des vues pour afficher la liste des emprunts, ajouter un nouvel emprunt, modifier un emprunt existant et supprimer un emprunt.<br><br>
19. Utilisez les relations entre les modèles pour afficher les informations associées aux emprunts, comme le titre du livre et le nom de l'emprunteur.<br><br>
20. Utilisez les événements Laravel pour enregistrer l'historique des modifications apportées aux livres <br></h4><br>


