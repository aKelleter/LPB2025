
---

### **Correction de l'exercice**

#### **1. Création des tables**
On commence par créer la table `pays` avec une clé primaire `id`, puis la table `villes` avec une clé étrangère `pays_id` qui référence `pays(id)`.

```sql
-- Table parent : pays
CREATE TABLE pays (
    id INT PRIMARY KEY,
    nom VARCHAR(100)
);

-- Table enfant : villes, avec une clé étrangère
CREATE TABLE villes (
    id INT PRIMARY KEY,
    nom VARCHAR(100),
    pays_id INT,
    FOREIGN KEY (pays_id) REFERENCES pays(id) ON DELETE RESTRICT
);
```
- `pays_id` est la clé étrangère dans `villes` qui référence `id` dans `pays`.
- `ON DELETE RESTRICT` empêche la suppression d’un pays s’il est référencé par une ville.

#### **2. Insertion de données**
Ajoutons quelques données pour tester la relation.

```sql
-- Insertion dans la table pays
INSERT INTO pays (id, nom) VALUES 
(1, 'France'),
(2, 'Italie');

-- Insertion dans la table villes
INSERT INTO villes (id, nom, pays_id) VALUES 
(1, 'Paris', 1),
(2, 'Lyon', 1),
(3, 'Rome', 2);
```

Vérifions les données :
```sql
SELECT * FROM pays;
```
Résultat :
| id | nom     |
|----|---------|
| 1  | France  |
| 2  | Italie  |

```sql
SELECT * FROM villes;
```
Résultat :
| id | nom   | pays_id |
|----|-------|---------|
| 1  | Paris | 1       |
| 2  | Lyon  | 1       |
| 3  | Rome  | 2       |

#### **3. Test de la contrainte `ON DELETE RESTRICT`**
Essayons de supprimer un pays qui est référencé par des villes.

```sql
DELETE FROM pays WHERE id = 1;
```
**Résultat attendu :** Une erreur est générée, car `France` (id=1) est référencé par les villes `Paris` et `Lyon`. MariaDB renverra un message semblable à :
```
ERROR 1451 (23000): Cannot delete or update a parent row: a foreign key constraint fails (`database_name`.`villes`, CONSTRAINT `villes_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`))
```
Cela montre que la contrainte `ON DELETE RESTRICT` fonctionne : la suppression est bloquée pour préserver l’intégrité référentielle.

#### **4. Test avec un pays non référencé**
Si on ajoute un pays sans villes associées, la suppression devrait fonctionner.

```sql
-- Ajout d’un pays sans villes
INSERT INTO pays (id, nom) VALUES (3, 'Espagne');

-- Tentative de suppression
DELETE FROM pays WHERE id = 3;
```
**Résultat attendu :** La suppression réussit, car aucune ville ne référence `Espagne` (id=3). Vérifions :
```sql
SELECT * FROM pays;
```
Résultat :
| id | nom     |
|----|---------|
| 1  | France  |
| 2  | Italie  |

#### **5. Bonus : Vérification avec une jointure**
Pour illustrer l’utilité de la clé étrangère dans une requête, faisons une jointure :
```sql
SELECT villes.nom AS ville, pays.nom AS pays
FROM villes
INNER JOIN pays ON villes.pays_id = pays.id;
```
Résultat :
| ville | pays   |
|-------|--------|
| Paris | France |
| Lyon  | France |
| Rome  | Italie |

La clé étrangère `pays_id` garantit que chaque ville est associée à un pays valide, et la jointure permet de récupérer ces informations de manière claire.

---

### **Analyse de la correction**
- **Création des tables** : Les tables respectent les conventions d’une relation parent-enfant, avec une clé étrangère bien définie.
- **Contrainte `ON DELETE RESTRICT`** : Elle protège les données en empêchant la suppression d’un pays tant qu’il est lié à des villes.
- **Insertion et test** : Les insertions sont cohérentes, et la tentative de suppression montre l’effet concret de la contrainte.
- **Jointure** : Elle illustre comment la clé étrangère sert de pont pour relier les données dans une requête.

### **Variante pour approfondir**
Si vous souhaitez tester un autre comportement, remplace `ON DELETE RESTRICT` par `ON DELETE CASCADE` dans la définition de `villes`, puis réexécute les étapes. Avec `CASCADE`, supprimer un pays supprimera aussi toutes ses villes associées. Par exemple :
```sql
DELETE FROM pays WHERE id = 1; -- Supprime France, Paris et Lyon
```
---
### **Explications supplémentaire !**
Clarifions le lien entre les clés étrangères et les jointures dans un SELECT, et pourquoi elles sont utiles dans ce contexte. Allons-y pas à pas !

---

### **Reprenons le contexte**
Dans l’exercice, nous avons :
- Une table `pays` avec une clé primaire `id`.
- Une table `villes` avec une clé étrangère `pays_id` qui référence `pays(id)`.

La requête du point 5 était :
```sql
SELECT villes.nom AS ville, pays.nom AS pays
FROM villes
INNER JOIN pays ON villes.pays_id = pays.id;
```

Résultat :
| ville | pays   |
|-------|--------|
| Paris | France |
| Lyon  | France |
| Rome  | Italie |

### **Qu’est-ce qu’une jointure dans un SELECT ?**
Une jointure (`JOIN`) dans une requête `SELECT` permet de **combiner des données** de plusieurs tables en fonction d’une condition. Ici, la condition est `villes.pays_id = pays.id`, qui relie chaque ville à son pays correspondant. L’objectif est de récupérer des informations utiles des deux tables en une seule requête (par exemple, le nom de la ville ET le nom du pays).

Mais quel est le rapport avec la **clé étrangère** ? C’est là que ça devient intéressant.

---

### **Rôle de la clé étrangère dans ce contexte**
La clé étrangère `pays_id` dans la table `villes` n’est pas *techniquement* obligatoire pour faire une jointure. On pourrait écrire la même requête `INNER JOIN` entre deux tables même si aucune clé étrangère n’était définie. Cependant, la clé étrangère joue un rôle crucial en **garantissant la cohérence et la fiabilité** des données que la jointure exploite. Voici pourquoi :

#### **1. Garantie d’intégrité référentielle**
La clé étrangère impose une règle : chaque valeur dans `villes.pays_id` doit correspondre à une valeur existante dans `pays.id` (ou être `NULL` si la colonne le permet). Cela signifie que :
- Il n’y aura jamais de ville associée à un `pays_id` inexistant (par exemple, une ville avec `pays_id = 999` alors qu’aucun pays n’a cet `id`).
- Quand tu fais une jointure avec `INNER JOIN`, tu es sûr que chaque ligne de `villes` trouvera une correspondance dans `pays`, et tu n’auras pas de "données orphelines" qui compliquent l’interprétation.

Sans clé étrangère, rien ne t’empêche d’insérer une ville avec un `pays_id` invalide. Par exemple :
```sql
INSERT INTO villes (id, nom, pays_id) VALUES (4, 'Berlin', 999);
```
Si `999` n’existe pas dans `pays`, une jointure `INNER JOIN` ignorerait cette ligne (car pas de correspondance), et tu perdrais cette information sans savoir pourquoi. Avec une clé étrangère, cette insertion serait rejetée dès le départ, te protégeant contre ce problème.

#### **2. Simplification de la logique de la jointure**
La clé étrangère indique clairement quelle colonne de `villes` (ici `pays_id`) doit être utilisée pour relier les deux tables. Elle agit comme un "guide" naturel pour écrire la condition de jointure (`ON villes.pays_id = pays.id`). Sans cette contrainte définie, tu devrais deviner ou vérifier manuellement quelle colonne sert de lien, ce qui peut mener à des erreurs dans des bases de données complexes.

#### **3. Confiance dans les résultats**
Grâce à la clé étrangère avec `ON DELETE RESTRICT` (dans notre cas), tu sais que :
- Si un pays est supprimé, toutes les villes associées restent cohérentes (car la suppression est bloquée).
- Ta jointure renverra toujours des résultats logiques et complets pour les données existantes.

Avec une jointure comme celle-ci, tu exploites directement la relation que la clé étrangère a structurée. Par exemple, tu peux être sûr que "Paris" est bien associée à "France" et pas à une valeur erronée ou manquante.

---

### **Exemple pour illustrer**
#### **Avec une clé étrangère**
Tables :
- `pays` : `(1, 'France'), (2, 'Italie')`
- `villes` : `(1, 'Paris', 1), (2, 'Lyon', 1), (3, 'Rome', 2)`

Requête :
```sql
SELECT villes.nom AS ville, pays.nom AS pays
FROM villes
INNER JOIN pays ON villes.pays_id = pays.id;
```
Résultat : Tout est cohérent, chaque ville a un pays valide.

#### **Sans clé étrangère**
Imaginons qu’on n’ait pas défini de clé étrangère. On pourrait insérer :
```sql
INSERT INTO villes (id, nom, pays_id) VALUES (4, 'Berlin', 999);
```
Requête :
```sql
SELECT villes.nom AS ville, pays.nom AS pays
FROM villes
INNER JOIN pays ON villes.pays_id = pays.id;
```
Résultat :
| ville | pays   |
|-------|--------|
| Paris | France |
| Lyon  | France |
| Rome  | Italie |
(*Berlin disparaît car `999` n’existe pas dans `pays`*)

Avec une clé étrangère, cette insertion aurait été bloquée, et tu n’aurais pas à te demander pourquoi "Berlin" manque dans les résultats.

---

### **En résumé**
L’utilité de la clé étrangère dans une jointure lors d’un `SELECT` n’est pas de "faire marcher" la jointure (elle marcherait sans), mais de **garantir que les données sont fiables et cohérentes** avant même que la requête ne soit exécutée. Elle :
- Évite les incohérences (valeurs orphelines ou invalides).
- Te donne confiance dans le fait que la jointure reflète une relation réelle et bien définie entre les tables.

C’est comme si la clé étrangère posait les rails (la structure), et la jointure était le train qui roule dessus : sans rails solides, le train risque de dérailler !

---

Est-ce que ça te semble plus clair maintenant ? Si tu veux, je peux te proposer un autre exemple ou approfondir un point précis !