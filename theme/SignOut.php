<?php
if(!session_id()) session_start();
unset($_SESSION['ID']);
session_unset();
ob_start();
header('Location: ' . 'Home');
ob_get_clean();
?>