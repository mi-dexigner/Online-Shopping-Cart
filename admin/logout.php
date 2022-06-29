<?php
require_once '/Applications/MAMP/htdocs/practice/ecommerce/settings.php';
session_destroy();
header("Location: /practice/ecommerce/admin/login.php");