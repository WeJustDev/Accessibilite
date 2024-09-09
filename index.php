<?php 
    $page = isset($_GET['page']) ? $_GET['page'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/main.css">
    <title>Document</title>
</head>
<body>
    <?php include "./components/header.php"; ?>
    <?php 
            $filePath = './components/' . $page . '.php';
            
            if (file_exists($filePath)) {
                include $filePath;
            } else {
                echo "<div class='w-full text-center mt-10'>Page non trouvée.</div>";
            }
        ?>
</body>
</html>