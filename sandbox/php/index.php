<?php
function listDirectories($dir) {

    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            echo "<ul>";
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != ".." && is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                    echo '<li><a target="_blank" href="'.$file.'">'.$file.'</a></li>';
                }
            }
            echo "</ul>";
            closedir($dh);
        } else {
            echo "Unable to open directory.";
        }
    } else {
        echo "Not a directory.";
    }
}

// Example usage
$path = './';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="shortcut icon" href="../../assets/img/favicon.ico"> 
    <link href="../../assets/css/styles.css" rel="stylesheet">
    <title>Sandbox PHP</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">                
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="mb-5 text-center">Sandbox PHP</h1>
                    <?php listDirectories($path); ?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>