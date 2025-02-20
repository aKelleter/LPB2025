<?php

function afficherImages($repertoire) {
    // Vérifie si le répertoire existe
    if (!is_dir($repertoire)) {
        echo "Le répertoire spécifié n'existe pas.";
        return;
    }

    // Scanne le contenu du répertoire
    $fichiers = scandir($repertoire);

    // Filtre les fichiers pour ne garder que les images
    $images = array_filter($fichiers, function($fichier) use ($repertoire) {
        $cheminComplet = $repertoire . DIRECTORY_SEPARATOR . $fichier;
        $extensionsValides = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = strtolower(pathinfo($cheminComplet, PATHINFO_EXTENSION));
        return is_file($cheminComplet) && in_array($extension, $extensionsValides);
    });

    // Affiche les images
    if (empty($images) && $repertoire !== 'photos') {
        echo "Aucune image trouvée dans le répertoire.";
    } else {
        echo "<div style='display: flex; flex-wrap: wrap; gap: 10px;'>";
        foreach ($images as $image) {
            $cheminImage = $repertoire . DIRECTORY_SEPARATOR . $image;
            echo '<div><a href="'.$cheminImage.'"><img src="'.$cheminImage.'" alt="$image" style="max-width: 150px; max-height: 150px;"></a></div>';
        }
        echo "</div>";
    }
}

function listerAlbums(){
    $albums = array_filter(glob('photos/*'), 'is_dir');
    foreach ($albums as $album) {
        echo '<a href="?album='.basename($album).'">'.basename($album).'</a><br>';
    }
}