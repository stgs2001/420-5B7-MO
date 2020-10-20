<!DOCTYPE html>
<html>
    
    <body>
        
        <h2>Simon St-Germain</h2>
        
        <h3>420-5b7 MO Applications internet</h3>
        
        <h4>Automne 2018, Collège Montmorency</h4>
        <br>
        <p>
        1. Remise du lien sur GitHub et page À propos<br>
        a) https://github.com/stgs2001/420-5B7-MO<br>
        b) .../pages/a_propos.ctp<br><br>
        2. BD avec hasMany (1-n) et belongsToMany (n-n)<br>
        a) .../products/ utilise hasMany et belongsToMany<br>
        b) .../accessories/add permet d'ajouter des nouveaux accessoires à un produit.<br>
        c) Il est aussi possible de choisir les photos liées à un produit par l'association hasMAny avec le Model Photos.<br><br>
        3. cake bake pour 5 tables + validations<br>
        a) Les tables sont: Users, Roles, Products, Accessories, Issues, Photos, Categories.<br>
        b) L'application est basée sur le résultat des modèles, des vues et des contrôleurs par la commande bin\cake bake all pour chaque table.<br><br>
        4. Actions et infos en menu pour trois types d'utilisateurs<br>
        a) Les utilisateurs du rôle admin ont accès à tout. (Ils sont les seuls a pouvoir accéder .../users/index)<br>
        Accédez à .../users/index avec personne en session. (You are not authorized to access that location.)<br>
        Accédez à .../users/index avec un membre Stgl2000@live.com / admin (You are not authorized to access that location.)<br>
        Accédez à .../users/index avec un admin admin@admin.com / admin (Vous y avez accès.)<br>
        b) Les utilisateurs du rôle moderator ont accès à presque tout. (Ils peuvent suprimmer ou modifier n'importe quel produit.)<br>
        Accédez à .../products/edit/1 avec personne en session. (You are not authorized to access that location.)<br>
        Accédez à .../products/edit/1 avec un membre Stgl2000@live.com / admin (You are not authorized to access that location.)<br>
        Accédez à .../products/edit/1 avec un moderateur moderator@mod.com / admin (Vous y avez accès.)<br>
        c) Les utilisateurs du rôle member ont accès à presque rien. (Ils peuvent ajouter des nouveaux produits et modifier/effacer seulement ceux qu'ils ont créé.)<br>
        Accédez à .../products/add avec personne en session. (You are not authorized to access that location.)<br>
        Accédez à .../products/add avec un membre Stgl2000@live.com / admin (Vous y avez accès.)<br>
        d) La barre de menu indique si un utilisateur est en session et affiche son courriel avec un lien pour se déconnecter.<br>
        En cliquant sur le courriel de l'utilisateur, on accède à la fiche de l'utilisateur.<br><br>
        5. Traduction i18n en français et 3ième langue<br>
        a) Une partie du contenu du site Web peut être offert en trois langues (français, anglais et espagnol).<br>
        b) Cliquez sur n'importe quel langue du menu en haut.<br><br>
        6. Gestion multilingue du contenu de la BD<br>
        a) .../src/Locale<br><br>
        7. Téléversement et affichage d'images liées<br>
        a) .../Photos/add permet d'ajouter une image au site Web.<br>
        b) .../Photos/edit permet de selectionner à quel produit l'image appartient.<br><br>
        8. Envoi d'un courriel de confirmation avec UUID<br>
        a) .../users/add permet d'ajouter un nouvel utilisateur.<br>
        b) Donnez une addresse courriel valide dont vous avez accès.<br>
        c) Cliquez sur le lien reçu dans le courriel.
        d) Vous êtes maintenant un modérateur.<br><br>
        </p>
        
        <h3>Diagramme de la base de données actuelle utilisé.</h3>
        
        <img src="../webroot/img/Photos/a_propos/Produits.PNG" alt="Base de données Produits">
        <br>
        <a href="http://www.databaseanswers.org/data_models/products_and_security/index.htm">Lien vers l'emplacement d'où provient le diagramme original.</a>

    </body>
    
</html>