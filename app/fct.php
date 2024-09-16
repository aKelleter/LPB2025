<?php

/**
* Returns the HTML code of footer of the page
* 
* @param string $year	Current site Year 
* @param string $date	Date of the last update	
* @param string $version	Version of the site	
* @return string	HTML code of the footer
*/
function getHtmlFooter($year, $date, $version, $author = '', $path = '')
{
    $string = '';
    $string .= APP_NAME." $year - $version - Updated : $date - $author - ".
    '<a href="https://github.com/aKelleter/LPB2025">
    <img src="'.$path.'assets/img/github-mark.svg"  alt="LPB 2025 Github Repository" class="lpb-github"></a>';
    return $string;
}