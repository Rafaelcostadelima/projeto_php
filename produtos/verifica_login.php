<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
 header("Location:" . __DIR__ . "login.php");
 exit;
}
?>