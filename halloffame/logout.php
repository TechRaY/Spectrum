<?php
session_start();
session_destroy();
header('Location:Backend/login.html');
?>