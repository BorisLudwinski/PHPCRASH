<?php
session_start();


session_destroy();

header('Location: /PHPCRASH/13-sessions.php');
?>