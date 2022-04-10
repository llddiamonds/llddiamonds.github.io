<?php
session_start();
if ($_SESSION['user']) {
    header("Location:index_second.php");
}
else
{
    header("Location:form_auth.php");
    session_unset();
}
?> 
