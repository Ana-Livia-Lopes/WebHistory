<?php
session_start();
session_unset();
// session_destroy();
$_SESSION['nome'] = '';
$_SESSION['tipo'] = '';
header('Location: index.php');
exit;
?>