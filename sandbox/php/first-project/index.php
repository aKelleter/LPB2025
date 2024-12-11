<?php 
    require_once './config/conf.php';   
?>
<!DOCTYPE html>
<html lang="fr">
<?= getHtmlHead('Home');?>
<body>
    <main class="container">

        <h1 class="red text-center mt-3">First Project</h1>  
        
        <nav class="nav">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="articles.php">Articles</a>
            <a class="nav-link" href="contact.php">Contact</a>           
        </nav>
        
        <div class="row">
            <section class="col-8">
                <h2>Accueil</h2>
                <p>Contenu principal</p>
            </section>
            <aside class="col-4">
                <h2>Liens secondaire</h2>
                <p>Liste de liens</p>
            </aside>   
        </div> 

        <footer class="text-center mt-5">Footer</footer>    

    </main>   
    <script src="<?= BOOTSTRAP_URL ?>js/bootstrap.bundle.min.js"></script>     
</body>
</html>