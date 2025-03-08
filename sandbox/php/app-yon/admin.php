<?php
    require_once('conf.php');

    $message = '';    
    $logout = null;
    $articles = null;

    // On vérifie si l'utilisateur est connecté
    if(!checkConnexion()) {               
        header('Location: login.php');
        exit;
    }

    // Récupérer tous les articles
    $articles = SQLSelectAll('articles');
    //DEBUG// Aprint($articles);

    // Si un message est passé en paramètre
    if(isset($_GET['message'])) {
        $message = '<div id="message" class="alert alert-success text-center" role="alert">'.$_GET['message'].'</div>';
    }

    // Si un article doit être supprimé
    if(isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $article = SQLDeleteArticle($delete_id);
        if($article) {
            header('Location: admin.php?message=L\'article a été supprimé');
            exit;
        } else {
            header('Location: admin.php?message=Article non trouvé');
            exit;
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
        <div class="menu">
            <a class="btn btn-primary" href="add.php">Ajouter un article</a>        
        </div>  
        <div class="row mt-5">
            <h2>Liste des articles</h2>
            <?php echo HTMLDisplayArticlesForAdmin($articles); ?>
        </div>  

    </div>
   <script src="assets/js/yon.js"></script>
</body>
</html>