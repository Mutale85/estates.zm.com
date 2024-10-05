<?php
include ("include/db.php");

unset($_SESSION['user_id']);
session_destroy();
header('location:./');