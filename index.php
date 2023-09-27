<?php
    include_once("public/include/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><Restuarant-1></Restuarant-1></title>
</head>
<body>
    <?php
        $controller=@$_GET['c'] ?? "index";
        if(file_exists("controller/C{$controller}.php")){
            require_once("controller/C{$controller}.php");
        }

    ?>
</body>
</html>

