<?php

include('inc/template.php');

$_SESSION = array();
session_destroy();

header("Location:index.php");

?>