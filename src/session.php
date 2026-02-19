<?php
session_start();

if(empty($_SESSION['csrfToken'])){
    $_SESSION['csrfToken'] = bin2hex(random_bytes(32));
}
?>