<?php
    require_once('conf.php');

    $message = '';
    $donnees = null;
    $logout = null;

    // On vérifie si l'utilisateur est connecté
    if(!checkConnexion()) {
        header('Location: login.php');
        exit;
    }

    // Si le formulaire est soumis on ajoute l'article
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        
        $res = SQLInsertArticle($titre, $contenu);

        // Redirection si ajouté
        if($res) {            
            header('Location: admin.php?message=Un nouvel article a été ajouté');
            exit;
        } else {
            $message = '<div class="alert alert-danger text-center">Erreur lors de l\'ajout</div>';
        }
    }
    
?>
<?= HTMLHead('Admin')?>
<body>
<div class="container">
    <h1 class="mt-5 mb-5 text-center text-danger">YON : Administration</h1>  
    <?= HTMLMenu('admin')?>
    <hr>
    <?php echo $message; ?>        
    <h1 class="text-center">Ajouter un article</h1>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input class="form-control" type="text" name="titre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenu</label>
            <textarea class="form-control" name="contenu" rows="5" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Ajouter</button>
        <a class="btn btn-secondary"  href="admin.php">Annuler</a>
    </form>
</div>  
</body>
</html>