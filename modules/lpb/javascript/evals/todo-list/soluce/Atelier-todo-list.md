ATELIER : TODO -LIST

---

### **Atelier : Créer une To-do List Interactive en JavaScript**
**Objectif :** Mettre en pratique les concepts de base du JavaScript (variables, fonctions, boucles, conditions, objets, etc.) en construisant une application simple de gestion de tâches dans la console ou une page web.

#### **Prérequis**
- Un éditeur de texte (ex. : VS Code). 
- Une connaissance des notions listées (variables, fonctions, boucles, etc.).
- Un navigateur pour tester le code.

#### **Introduction (10 minutes)**
1. **Accueil et objectif :**
   - "Aujourd'hui, nous allons coder une application simple de gestion de tâches. Vous pourrez ajouter des tâches, les supprimer et les marquer comme terminées, tout en révisant les bases du JavaScript que vous avez apprises."
2. **Rappel rapide :**
   - Où écrire du JavaScript ? (dans une balise `<script>`, un fichier .js, ou la console).
   - L'importance de l'ordre d'exécution et des commentaires pour structurer le code.

---

#### **Partie 1 : Mise en place de la structure (20 minutes)**

**Objectif :** Créer un environnement de travail et une base simple avec des variables et des objets.

1. **Étape 1 : Préparer le terrain**
   - Créez un fichier HTML avec une balise `<script>` ou utilisez la console du navigateur.
   - Ajoutez ce commentaire au début :
     ```javascript
     // Ma première to-do list en JavaScript
     ```

2. **Étape 2 : Définir les premières variables**
   - Demandez aux étudiants de créer un tableau pour stocker les tâches :
     ```javascript
     let taches = []; // Tableau vide pour stocker les tâches
     ```
   - Expliquez que chaque tâche sera un objet avec des propriétés comme `nom` (String) et `terminee` (Boolean).

3. **Étape 3 : Ajouter une tâche manuellement**
   - Ajoutez une tâche dans le tableau avec une méthode `.push()` :
     ```javascript
     taches.push({ nom: "Apprendre JavaScript", terminee: false });
     console.log(taches);
     ```

**Mini-exercice :** Demandez aux étudiants d'ajouter 2 tâches de leur choix et d'afficher le tableau.

---

#### **Partie 2 : Ajouter des fonctionnalités avec des fonctions (40 minutes)**

**Objectif :** Utiliser des fonctions, boucles et conditions pour manipuler les tâches.

1. **Étape 1 : Créer une fonction pour ajouter une tâche**
   - Proposez cette fonction simple :
     ```javascript
     function ajouterTache(nom) {
         let nouvelleTache = { nom: nom, terminee: false };
         taches.push(nouvelleTache);
         console.log(`Tâche "${nom}" ajoutée !`);
     }
     ```
   - Testez avec :
     ```javascript
     ajouterTache("Faire les courses");
     console.log(taches);
     ```

2. **Étape 2 : Afficher toutes les tâches avec une boucle**
   - Créez une fonction pour lister les tâches :
     ```javascript
     function listerTaches() {
         if (taches.length === 0) {
             console.log("Aucune tâche pour le moment.");
         } else {
             for (let i = 0; i < taches.length; i++) {
                 let statut = taches[i].terminee ? "Terminée" : "En cours";
                 console.log(`${i + 1}. ${taches[i].nom} - ${statut}`);
             }
         }
     }
     ```
   - Testez avec `listerTaches()` après avoir ajouté quelques tâches.

3. **Étape 3 : Marquer une tâche comme terminée**
   - Ajoutez une fonction avec un paramètre :
     ```javascript
     function marquerTerminee(numero) {
         if (numero > 0 && numero <= taches.length) {
             taches[numero - 1].terminee = true;
             console.log(`Tâche ${numero} marquée comme terminée.`);
         } else {
             console.log("Numéro invalide.");
         }
     }
     ```
   - Testez avec `marquerTerminee(1)` et vérifiez avec `listerTaches()`.

**Mini-exercice :** Demandez aux étudiants d’ajouter 3 tâches, d’en marquer une comme terminée, et d’afficher la liste.

---

#### **Partie 3 : Améliorations et exploration (30 minutes)**

**Objectif :** Introduire des concepts plus avancés comme les opérateurs logiques et les fonctions fléchées.

1. **Étape 1 : Supprimer une tâche**
   - Proposez une fonction avec `.splice()` :
     ```javascript
     function supprimerTache(numero) {
         numero = numero ?? 1; // Opérateur de coalescence pour une valeur par défaut
         if (numero > 0 && numero <= taches.length) {
             let tacheSupprimee = taches.splice(numero - 1, 1);
             console.log(`Tâche "${tacheSupprimee[0].nom}" supprimée.`);
         } else {
             console.log("Numéro invalide.");
         }
     }
     ```
   - Testez avec `supprimerTache(2)`.

2. **Étape 2 : Simplifier avec une fonction fléchée**
   - Transformez `listerTaches` en fonction fléchée :
     ```javascript
     const listerTaches = () => {
         taches.length === 0 
             ? console.log("Aucune tâche.") 
             : taches.forEach((tache, i) => {
                 console.log(`${i + 1}. ${tache.nom} - ${tache.terminee ? "Terminée" : "En cours"}`);
             });
     };
     ```

**Mini-exercice :** Supprimez une tâche et utilisez la nouvelle version de `listerTaches` pour vérifier.

---

#### **Partie 4 : Bonus et personnalisation (20 minutes)**

**Objectif :** Laisser les étudiants explorer et personnaliser.

- **Suggestions :**
  - Ajouter une fonction pour compter les tâches terminées avec une boucle `for` et une condition `if`.
  - Convertir une entrée utilisateur en String avec `String()` pour éviter les erreurs.
  - Utiliser un `switch` pour gérer différents types de commandes (ajouter, supprimer, lister).

- **Exemple bonus :**
  ```javascript
  function compterTerminees() {
      let compte = 0;
      for (let tache of taches) {
          if (tache.terminee) compte++;
      }
      console.log(`Tâches terminées : ${compte}`);
  }
  ```

---

#### **Conclusion (10 minutes)**

1. **Résumé :**
   - "Vous avez utilisé des variables, des objets, des boucles, des conditions, des fonctions et même des opérateurs avancés pour créer une to-do list fonctionnelle. Bravo !"
2. **Défi à la maison :**
   - Connecter ce code à une page HTML avec des boutons pour interagir (optionnel, selon leur niveau).

---


### **Exemple de sortie dans la console :**
```
Tâche "Apprendre JavaScript" ajoutée !
Tâche "Faire les courses" ajoutée !
Tâche "Réviser pour l'examen" ajoutée !
1. Apprendre JavaScript - En cours
2. Faire les courses - En cours
3. Réviser pour l'examen - En cours
Tâche 1 marquée comme terminée.
1. Apprendre JavaScript - Terminée
2. Faire les courses - En cours
3. Réviser pour l'examen - En cours
Tâche "Faire les courses" supprimée.
1. Apprendre JavaScript - Terminée
2. Réviser pour l'examen - En cours
Tâches terminées : 1
```

Code complet


```javascript
// Ma première to-do list en JavaScript

// Tableau pour stocker les tâches (chaque tâche est un objet avec un nom et un statut)
let taches = [];

// Fonction pour ajouter une tâche
function ajouterTache(nom) {
    let nouvelleTache = { nom: nom, terminee: false }; // Création d'un objet tâche
    taches.push(nouvelleTache); // Ajout au tableau
    console.log(`Tâche "${nom}" ajoutée !`);
}

// Fonction pour afficher toutes les tâches (version avec fonction fléchée)
const listerTaches = () => {
    if (taches.length === 0) {
        console.log("Aucune tâche pour le moment.");
    } else {
        taches.forEach((tache, i) => {
            let statut = tache.terminee ? "Terminée" : "En cours"; // Opérateur ternaire
            console.log(`${i + 1}. ${tache.nom} - ${statut}`);
        });
    }
};

// Fonction pour marquer une tâche comme terminée
function marquerTerminee(numero) {
    if (numero > 0 && numero <= taches.length) { // Vérification du numéro
        taches[numero - 1].terminee = true; // Mise à jour du statut
        console.log(`Tâche ${numero} marquée comme terminée.`);
    } else {
        console.log("Numéro invalide.");
    }
}

// Fonction pour supprimer une tâche
function supprimerTache(numero) {
    numero = numero ?? 1; // Opérateur de coalescence pour une valeur par défaut
    if (numero > 0 && numero <= taches.length) {
        let tacheSupprimee = taches.splice(numero - 1, 1); // Suppression de la tâche
        console.log(`Tâche "${tacheSupprimee[0].nom}" supprimée.`);
    } else {
        console.log("Numéro invalide.");
    }
}

// Fonction bonus : compter les tâches terminées
function compterTerminees() {
    let compte = 0;
    for (let tache of taches) { // Boucle for...of
        if (tache.terminee) compte++; // Incrémentation si terminée
    }
    console.log(`Tâches terminées : ${compte}`);
}

// Exemple d'utilisation :
ajouterTache("Apprendre JavaScript");
ajouterTache("Faire les courses");
ajouterTache("Réviser pour l'examen");

listerTaches(); // Affiche la liste initiale

marquerTerminee(1); // Marque la première tâche comme terminée
listerTaches(); // Affiche la liste mise à jour

supprimerTache(2); // Supprime la deuxième tâche
listerTaches(); // Affiche la liste après suppression

compterTerminees(); // Affiche le nombre de tâches terminées
```

### **Pour aller plus loin (optionnel) :**
Si vous voulez intégrer ce code dans une page HTML, voici une base simple à fournir aux étudiants :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>To-do List JavaScript</title>
</head>
<body>
    <h1>Ma To-do List</h1>
    <script>
        // Collez le code JavaScript ci-dessus ici
    </script>
</body>
</html>
```

Vous pourrez  ensuite remplacer les `console.log()` par des manipulations du DOM (par exemple, avec `document.createElement`) pour afficher les tâches sur la page, mais cela dépend de votre progression dans le cours.

