<?php
declare(strict_types=1);

// Définition des constantes 
const PR = 'PR';        // print_r
const VD = 'VARDUMP';   // var_dump 


/**
 * getHtmlFooter($year, $date, $version, $author = '', $path = '') :
 * 
* Returns the HTML code of footer of the page
* 
* @param string $year	Current site Year 
* @param string $date	Date of the last update	
* @param string $version	Version of the site	
* @return string	HTML code of the footer
*/
function getHtmlFooter(string $version, string $author = '', string $path = ''): string {
    $string = '';
    $string .= APP_NAME."  - $version -  $author ".
    '<a href="https://github.com/aKelleter/LPB2025">
    <img src="'.$path.'assets/img/github-mark.svg"  alt="LPB 2025 Github Repository" title="Github Repository LPB 2025" class="lpb-github"></a>
     <a href="https://creativecommons.org/licenses/by/4.0/"> <img src="'.$path.'assets/img/by.svg"  alt="LPB 2025 Github Repository - Creative Commons By 4.0" fill="#ffffff" class="lpb-cc" title="Creative Commons By 4.0"></a>
    ';
    return $string;
}

/**
 * getHtmlCoursesList($courses, $courseType) :
 * 
 * Returns the HTML code of the ordered list HTML of courses
 *  
 * @param array $courses	List of courses
 * @param string $courseType	Type of course
 * @return string	HTML code of the list of courses
 */
function getHtmlCoursesList(array $courses, string $courseType): string {
    $string = '';

    if(!empty($courses))
    {
        $string .= '<ol>';
        foreach($courses as $course)
        {
            if($courseType == PHP)
                $string .= '<li><a href="'.$course['id'].'/index.php" class="link-script">'.$course['title'].'</a></li>';
            elseif($courseType == JS)
                $string .= '<li><a href="'.$course['id'].'/index.php" class="link-script">'.$course['title'].'</a></li>';
            elseif($courseType == LDB)
                $string .= '<li><a href="'.$course['id'].'/index.php" class="link-script">'.$course['title'].'</a></li>';
            elseif($courseType == OTHERS)
                $string .= '<li><a href="'.$course['id'].'/index.php" class="link-script">'.$course['title'].'</a></li>';
        } 
        $string .= '</ol>';   
    }else {
        $string .= '<div class="lpb-msg">No data available... patience :)</div>';
    }
        
    return $string;
}

/**
 * getHtmlBlocWhatCodeDoes($blockquote) :
 * 
 * Affiche le bloc HTML "Que va-t-on faire ?"
 * 
 * @param string $blockquote 
 * @return string 
 */
function getHtmlBlocWhatCodeDoes(string $blockquote): string {
    $string = '';
    $string .= '    <!-- What the source code does -->
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h6>'.TITLE_WHAT_CODE_DOES.'</h6>
                            <hr>
                            <blockquote class="code-info">'.$blockquote.'</blockquote>       
                        </div>
                        <div class="col-md-1"></div>
                    </div>';
    return $string;
}

/**
 * getHtmlBlockSourceCode($code, $pathfile) :
 * 
 * Affiche le bloc HTML "Le code source"
 * 
 * @param string $code 
 * @param string $pathfile 
 * @return string 
 */
function getHtmlBlockSourceCode(string $code, string $pathfile): string {
    $string = '';
    $string .= '    <!-- The source code -->                    
                        <div class="row mt-5">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h6>'.TITLE_SOURCE_CODE.' :</h6>
                                <hr>
                                <textarea class="codemirror-textarea code-php mb-2" name="code-src" id="code-src" cols="100%">'.$code.'</textarea>                                
                                <a class="btn btn-primary" href="'.$pathfile.'" target="_blank">Exécuter</a>                                
                            </div>
                            <div class="col-md-1"></div>
                        </div>                                        
                    ';
    return $string;
}

/**
 * getHtmlBlockRendering($rendering) :
 * 
 * Affiche le bloc HTML "Le rendu dans le navigateur"
 * 
 * @param string $rendering 
 * @return string 
 */
function getHtmlBlockRendering(string $rendering): string {
    $string = '';
    $string .= '    <!-- Rendering in the browser -->
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 mt-5">  
                            <h6 class="mt-5">'.TITLE_RENDERING.' : </h6>  
                            <hr>
                            <div class="result">
                                '.$rendering.'
                            </div>
                        </div>
                    </div>';
    return $string;
}

/**
 * getHtmlEmptySpace() :
 * Affiche une structure HTML vide
 * 
 * @return string 
 */
function getHtmlEmptySpace(): string {
    $string = '';
    $string .= '<p class="mt-5"></p>';
    return $string;
}

/**
 * getHtmlBlockExplanations($explanations) :
 * 
 * Affiche le bloc HTML "Les explications"
 * 
 * @param array $explanations 
 * @return string 
 */
function getHtmlBlockExplanations(array $explanations): string {
    $string = '';
    $string .= '    <!-- Explanations -->
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">  
                            <h6>'.TITLE_EXPLANATIONS.' : </h6>  
                            <hr>
                            <div class="explanation">
                                <ol>';
    foreach($explanations as $explanation)
    {
        $string .= '<li>'.$explanation.'</li>';
    }
    $string .= '            </ol>                                    
                            </div>
                        </div>
                    </div>';
    return $string;
}

/**
 * getHtmlBlockRessources(array $ressources): string
 * 
 * Affiche le bloc HTML "Les éventuelles ressources additionnelles"
 * 
 * @param array $ressources 
 * @return string 
 */
function getHtmlBlockRessources(array $ressources): string {
    $string = '';
    $string .= '    <!-- Additional resources -->
                    <div class="row mt-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">  
                            <h6>'.TITLE_RESSOURCES.' : </h6>  
                            <hr>
                            <div class="code-sources">';
    foreach($ressources as $ressource)
    {
        $string .= '<a href="'.$ressource['url'].'" target="_blank">'.$ressource['title'].'</a><br>';
    }
    $string .= '            </div>  
                        </div>
                    </div>';
    return $string;
}

/**
 * getHtmlSubMenu($prevUrl, $nextUrl) :
 * 
 * Affiche le sous-menu de navigation entre les leçons
 * 
 * @param string $prevUrl 
 * @param string $nextUrl 
 * @return string 
 */
function getHtmlSubMenu(string $prevUrl, string $nextUrl, string $mod = PHP): string {
    $string = '';
    $string .= '    <!-- Sub menu -->
                    <div class="row mt-1">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                              
                            <div class="submenu">';
                                if($prevUrl != '00')
                                    $string .= '<a href="'.$_SESSION['R'].MOD.DS.LPB.DS.$mod.DS.LESS.DS.$prevUrl.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#arrowLeftSquare"></use></svg></a>';

                                $string .='<a href="'.$_SESSION['R'].MOD.DS.LPB.DS.$mod.DS.LESS.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#rocket"></use></svg></a>';

                                if($nextUrl != '00')
                                    $string .= '<a href="'.$_SESSION['R'].MOD.DS.LPB.DS.$mod.DS.LESS.DS.$nextUrl.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#arrowRightSquare"></use></svg></a>
                            </div>
                        </div>
                    </div>';
    return $string;
}

/**
 * getHtmlSubMenuLDB($prevUrl, $nextUrl) :
 * 
 * Affiche le sous-menu de navigation entre les leçons du module LDB
 * 
 * @param string $prevUrl 
 * @param string $nextUrl 
 * @return string 
 */
function getHtmlSubMenuLDB(string $prevUrl, string $nextUrl): string {
    $string = '';
    $string .= '    <!-- Sub menu -->
                    <div class="row mt-1">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                              
                            <div class="submenu">';
                                if($prevUrl != '00')
                                    $string .= '<a href="'.$_SESSION['R'].MOD.DS.LDB.DS.COURS.DS.LESS.DS.$prevUrl.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#arrowLeftSquare"></use></svg></a>';

                                $string .='<a href="'.$_SESSION['R'].MOD.DS.LDB.DS.COURS.DS.LESS.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#rocket"></use></svg></a>';

                                if($nextUrl != '00')
                                    $string .= '<a href="'.$_SESSION['R'].MOD.DS.LDB.DS.COURS.DS.LESS.DS.$nextUrl.DS.'index.php'.'" class="icon-sub"><svg class="bi" width="24" height="24"><use xlink:href="'.$_SESSION['R'].ASSETS.DS.A_IMG.DS.'sprites.svg#arrowRightSquare"></use></svg></a>
                            </div>
                        </div>
                    </div>';
    return $string;
}

/** 
 * listCourses() : 
 * 
 * Returns the LIST (array) of courses
 * 
 * @return array	The list of courses
 */
function listCourses(): array {
    
    $courses = []; 
    $titre = null;
    $id = null;           
    $compteur = 0;
    $dossiers = glob('*');

    // Classement des dossiers afin qu'ils soient affichés par ordre alphabétique / croissant
    asort($dossiers);     
    
    // Lister les dossiers
    foreach($dossiers as $repertoire) 
    {
        // Vérifier si c'est un dossier que l'on traite et non un fichier
        if(is_dir($repertoire) && $repertoire != '00') 
        {
            $id = $repertoire;
            
            // Lecture du titre
            if(file_exists($repertoire.'/'.'title.html'))
                $titre = file_get_contents($repertoire.'/'.'title.html');
            else
                $titre = 'No title file here...';

            $courses[$compteur]['id'] = $id;
            $courses[$compteur]['title'] = $titre; 

            $compteur++; 
        }
    }
    
    return $courses;    
}

/** 
 * listEvals() : 
 * 
 * Returns the LIST (array) of evaluations
 * 
 * @return array	The list of evaluations
 */
function listEvals(): array {
    
    $evals = []; 
    $titre = null;
    $id = null;           
    $compteur = 0;
    $dossiers = glob('*');

    // Classement des dossiers afin qu'ils soient affichés par ordre alphabétique / croissant
    asort($dossiers);     
    
    // Lister les dossiers
    foreach($dossiers as $repertoire) 
    {
        // Vérifier si c'est un dossier que l'on traite et non un fichier
        if(is_dir($repertoire)) 
        {
            $id = $repertoire;
            
            // Lecture du titre
            if(file_exists($repertoire.'/'.'title.html'))
                $titre = file_get_contents($repertoire.'/'.'title.html');
            else
                $titre = 'No title file here...';

            $evals[$compteur]['id'] = $id;
            $evals[$compteur]['title'] = $titre; 

            $compteur++; 
        }
    }
    
    return $evals;    
}

/**
 * DBGPrint($array, $info = null, $type = PR) : 
 * 
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @param string $info
 *
 * @return void 
 */
function DBGPrint(array $array, string $type = PR, string $info = ''): void {

    if($type == PR)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($array);
        echo '</pre>';
    }elseif($type == VD)
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($array);
        echo '</pre>';
    }    
}

/**
 * loadFile($filename) :
 * Charge le code source d'un fichier
 * 
 * Retourne le code source ou un message d'erreur
 * 
 * @param mixed $filename 
 * @return string|false 
 */
function loadFile(string $filename): string|false {
    $code = (@file_exists($filename))?file_get_contents($filename):'Le fichier source est introuvable';
    return $code;
}

/**
 * br(): void
 * Affiche un saut de ligne HTML
 * 
 * @return void 
 */
function br(): void {
    echo '<br>';
}

/**
 * hr(): void
 * Affiche une ligne horizontale HTML
 * 
 * @return void 
 */
function hr(): void {
    echo '<hr>';
}

/**
 * echol($string, $line = 0): void
 * Affiche une chaîne de caractères avec un numéro de ligne
 * et un saut de ligne HTML
 * 
 * @param mixed $item  - item to display - mandatory (string, array, object, ...)
 * @param int $line - Display line number - no mandatory
 * @return void 
 */
function echol (mixed $item, int $line = 0): void {

    if($line == 0)
        echo '<p><u>' . $item . '</u></p>';
    else
        echo 'LINE '.$line . ' : <strong>' . $item . '</strong><br>';
}