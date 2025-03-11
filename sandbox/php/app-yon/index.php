<?php
    require_once('conf.php');
 
    $message = '';
    $articles = SQLSelectAll('articles');
    //DEBUG//Aprint($articles);
    
?>
<?= HTMLHead('Accueil')?>
<body>
    <div class="container text-center">
        <h1 class="mt-5 mb-5"><?= APP_NAME?></h1>  
        <?= HTMLMenu('index')?>
        <hr>
        <?php echo $message; ?>        
        <div class="row">
            <?php echo HTMLDisplayArticles($articles); ?>
        </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script src="assets/js/yon.js"></script>
</body>
</html>