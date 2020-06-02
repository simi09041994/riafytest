<?php
// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener library file
require_once 'Shortener.class.php';

if(isset($_POST['submit']))
{
$longURL = $_POST['url'];
}

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Long URL
//$longURL = 'https://www.edureka.co/blog/top-10-trending-technologies/';

// Prefix of the short URL 
$shortURL_Prefix = 'http://localhost/riafy/redirect.php?c='; // with URL rewrite

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    //echo 'Short URL: <a href="'.$shortURL.'" target="_blank">'.$shortURL.'</a>';
	header("Location: http://localhost/riafytest/table.php");
	
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
?>