<?php
    require_once('conf.php');

    $message = '';
    $donnees = null;
    $logout = null;
    $article = null;

    // On vérifie si l'utilisateur est connecté
    if(!checkConnexion()) {                
        header('Location: login.php');
        exit;
    }

    // Récupérer l'article à l'aide de l'ID passé en paramètre
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $article = SQLLoadArticleByID($id);
        //DEBUG// Aprint($article);

        // Si l'article n'existe pas
        if(empty($article)) {
            $message = '<div id="message" class="alert alert-danger text-center">Article non trouvé</div>';
            $article['titre'] = '';
            $article['contenu'] = '';
        }       
        
    }

    // Si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $id = $_POST['id'];

        $res = SQLUpdateArticle($id, $titre, $contenu);

        // Redirection si ajouté
        if($res) {            
            header('Location: admin.php?message=L\'article a été modifié');
            exit;
        } else {
            $message = '<div id="message" class="alert alert-danger text-center">Erreur lors de la modification</div>';
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
        <h1 class="text-center">Modifier un article</h1>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input class="form-control" type="text" name="titre" value="<?= htmlspecialchars($article['titre']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contenu</label>
                <textarea class="form-control" name="contenu" rows="5" required><?= htmlspecialchars($article['contenu']) ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= $article['id'] ?>">        
            <button class="btn btn-primary" type="submit">Modifier</button>        
            <a class="btn btn-secondary"  href="admin.php">Annuler</a>
            <a class="btn btn-danger" href="admin.php?delete_id=<?=$article['id']?>">Supprimer</a>
        </form>
    </div>  
    <script src="assets/js/yon.js"></script>
</body>
</html>