<?php
    session_start();
       if (!$session['usuario']) {            
        header('index.php');
        exit();        
    }
