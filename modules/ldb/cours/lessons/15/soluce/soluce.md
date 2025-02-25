#### **Exercice pratique**
1. Écrivez une requête pour trouver les employés embauchés après 2021, triés par date d’embauche.
2. Calculez le salaire moyen par département pour les salaires supérieurs à 3500.

Solutions :
1. ```sql
   SELECT nom, prenom, date_embauche 
   FROM employes 
   WHERE date_embauche > '2021-12-31' 
   ORDER BY date_embauche;
   ```
2. ```sql
   SELECT departement, AVG(salaire) AS salaire_moyen 
   FROM employes 
   WHERE salaire > 3500 
   GROUP BY departement;
   ```
