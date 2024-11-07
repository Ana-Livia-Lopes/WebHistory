<?php
session_start();
session_unset();
// session_destroy();
$_SESSION['nome'] = '';
$_SESSION['tipo'] = '';

if(isset($_GET['exc'])) {
    header('Location: index.php?exc=1');
} else {
    header('Location: index.php');
}
exit;
?>