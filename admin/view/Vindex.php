<?php 
require_once("layout/header.php");
$controller = @$_GET['c']?? "index";
$action = @$_GET['a'] ?? "index";
if(file_exists("controller/C{$controller}.php")){
    require_once("controller/C{$controller}.php");
}

require_once("layout/footer.php");