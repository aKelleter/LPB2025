-- Création de la vue Vue_Commandes_Detaillees
CREATE VIEW Vue_Commandes_Detaillees AS
SELECT 
    p.nom_produit,
    c.nom_categorie,
    com.quantite,
    com.date_commande
FROM 
    Commandes com
JOIN 
    Produits p ON com.id_produit = p.id_produit
JOIN 
    Categories c ON p.id_categorie = c.id_categorie;

/*
Explication de la requête :

    CREATE VIEW : Commande pour définir une nouvelle vue.
    AS : Introduit la requête qui constitue la vue.
    SELECT : On choisit les colonnes à afficher :
        nom_produit vient de la table Produits.
        nom_categorie vient de la table Categories.
        quantite et date_commande viennent de la table Commandes.
    JOIN : On relie les tables avec des jointures :
        Commandes est liée à Produits via id_produit.
        Produits est liée à Categories via id_categorie.
*/