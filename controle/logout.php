<?php
session_start();
session_destroy();
header('Location: ../telas/login/login.php');
exit();
?>