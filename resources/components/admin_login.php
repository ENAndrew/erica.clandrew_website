<?php

if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $adminPass = $_POST['adminPass'];
    
    if (!$_POST['username']) {
        $errUsername = 'How can it not know what it is?';
    }
    
    if (!$_POST['adminPass']) {
        $errAdminPass = 'Have you ever retired a human by mistake?';
    }  
}
?>