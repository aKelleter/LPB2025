### Exercices pratiques : Solutions

#### Exercice 1 : Créer une table `cours` et insérer 3 cours
**Énoncé :** Créez une table `cours` avec les colonnes `id` (AUTO_INCREMENT), `nom` (VARCHAR), et `credits` (INT). Insèrez 3 cours de votre choix.

**Solution :**

1. **Création de la table :**
```sql
CREATE TABLE cours (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    credits INT NOT NULL
);
```
- `id` : Clé primaire avec auto-incrémentation.
- `nom` : Nom du cours, obligatoire (VARCHAR de 50 caractères max).
- `credits` : Nombre de crédits, obligatoire (entier).

2. **Insertion de 3 cours :**
```sql
INSERT INTO cours (nom, credits)
VALUES 
    ('Mathématiques', 6),
    ('Informatique', 5),
    ('Physique', 4);
```
- On spécifie `nom` et `credits`, et `id` sera généré automatiquement (1, 2, 3).
- Résultat attendu :
```
id | nom           | credits
1  | Mathématiques | 6
2  | Informatique  | 5
3  | Physique      | 4
```

---

#### Exercice 2 : Ajouter une ligne dans `etudiants` avec seulement `nom` et `prenom`
**Énoncé :** Ajoutez une ligne dans `etudiants` avec seulement `nom` et `prenom`.

**Solution :**
```sql
INSERT INTO etudiants (nom, prenom)
VALUES ('Moreau', 'Luc');
```
- La table `etudiants` (définie dans la leçon) a `id` (AUTO_INCREMENT), `nom` (NOT NULL), `prenom` (NOT NULL), `age` (optionnel), et `email` (optionnel avec contrainte UNIQUE).
- Puisque `age` et `email` sont optionnels, on peut les omettre, et `id` sera généré automatiquement (par exemple, 5 si c’est la 5e ligne).
- Résultat attendu (par exemple) :
```
id | nom    | prenom | age | email
5  | Moreau | Luc    | NULL| NULL
```

---

#### Exercice 3 : Insérer deux lignes dans `etudiants` en une seule requête
**Énoncé :** Insère deux lignes dans `etudiants` en une seule requête.

**Solution :**
```sql
INSERT INTO etudiants (nom, prenom, age, email)
VALUES 
    ('Girard', 'Emma', 23, 'emma.girard@example.com'),
    ('Roux', 'Thomas', 20, 'thomas.roux@example.com');
```
- On utilise la syntaxe d’insertion multiple avec deux tuples de valeurs.
- Les colonnes `nom`, `prenom`, `age`, et `email` sont remplies explicitement, et `id` sera généré automatiquement (par exemple, 6 et 7).
- Résultat attendu (par exemple) :
```
id | nom    | prenom | age | email
6  | Girard | Emma   | 23  | emma.girard@example.com
7  | Roux   | Thomas | 20  | thomas.roux@example.com
```

---

### Vérification
Pour vérifier les insertions, vous pouvez exécuter :
```sql
SELECT * FROM cours;
SELECT * FROM etudiants;
```
Cela affichera toutes les lignes des tables `cours` et `etudiants` avec les données insérées.

---
