<?php
header("Content-Type:application/json");
require_once '../dbConfig.php';

// Include URL Shortener library file
require_once '../Shortener.class.php';
       
if(isset($_POST['long_url']) ){
try{
	$shortener = new Shortener($db);
	$shortURL_Prefix = 'http://localhost/riafytest/redirect.php?c=';
	$shortCode = $shortener->urlToShortCode($_POST['long_url']);
	$shortURL = $shortURL_Prefix.$shortCode;
    //echo 'Short URL: '.$shortURL;
	$maindata = ["msg"=>"success","code"=>"0","model"=>$shortURL];
			header('Content-Type: application/json'); echo json_encode($maindata); die();
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
}         
else{
			response(NULL, NULL, 200,"Provide complete url to create.");
}
?>