### **Exercice pratique**
1. Écrivez une requête avec `LIKE` pour trouver les employés dont le nom contient "an".
2. Utilisez une sous-requête avec `IN` pour trouver les employés embauchés dans les mêmes départements que ceux ayant un salaire > 4000.
3. Créez un index sur `date_embauche` et expliquez pourquoi cela pourrait être utile.

#### **Solutions**
1. ```sql
   SELECT nom, prenom 
   FROM employes 
   WHERE nom LIKE '%an%';
   ```
   (Résultat : Durand Marie)

2. ```sql
   SELECT nom, prenom, departement 
   FROM employes 
   WHERE departement IN (SELECT departement FROM employes WHERE salaire > 4000);
   ```
   (Résultat : Martin Sophie, car seul son département "Ressources Humaines" répond au critère.)

3. ```sql
   CREATE INDEX idx_date_embauche ON employes(date_embauche);
   ```
   Utile pour accélérer les requêtes filtrant ou triant par date, comme `WHERE date_embauche > '2022-01-01'` ou `ORDER BY date_embauche`.

---
