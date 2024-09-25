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
function getHtmlFooter(string $year, string $date, string $version, string $author = '', string $path = ''): string {
    $string = '';
    $string .= APP_NAME." $year - $version - Updated : $date - $author - ".
    '<a href="https://github.com/aKelleter/LPB2025">
    <img src="'.$path.'assets/img/github-mark.svg"  alt="LPB 2025 Github Repository" class="lpb-github"></a>';
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
                $string .= '<li><a href="'.$course['id'].'/index.html" class="link-script">'.$course['title'].'</a></li>';
        } 
        $string .= '</ol>';   
    }else {
        $string .= '<div class="lpb-msg">No course available... patience :)</div>';
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
                            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%">'.$code.'</textarea>                                
                            <a class="btn btn-primary" href="'.$pathfile.'" target="_blank">Exécuter</a>                                
                        </div>
                        <div class="col-md-1"></div>
                    </div>';
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
 * getHtmlBlockRessources($ressources) :
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
        if(is_dir($repertoire)) 
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
 * magicDisp($array, $info = null, $type = PR) : 
 * 
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @param string $info
 *
 * @return void 
 */
function magicDisp(array $array, string $type = PR, string $info = null): void {

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
 * loadSourceCode($filename) :
 * Charge le code source d'un fichier
 * 
 * Retourne le code source ou un message d'erreur
 * 
 * @param mixed $filename 
 * @return string|false 
 */
function loadSourceCode(string $filename): string|false {
    $code = (@file_exists($filename))?file_get_contents($filename):'Le fichier source est introuvable';
    return $code;
}