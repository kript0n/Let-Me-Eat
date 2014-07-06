<?php
    require_once('defines.php');
    require_once('includes.php');
    
    try {
	
        //$object = DB::getInstance();
        include('./templates/header.php');
        include('./templates/body.php');
        include('./templates/footer.php');       
        
        
    } catch (DBException $ex) {
        $ex->printError();
    }
    
    
?>