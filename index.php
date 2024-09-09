<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/main.css">
</head>

<body>
    <?php include "./components/header.php"; ?>

    <main role="main" id="contenu" tabindex="-1">
        <?php
        if ($page) {
            $filePath = './components/' . $page . '.php';
    
            if (file_exists($filePath)) {
                include $filePath;
            } else {
                include './components/accueil.php';
            }
        } else {
            include './components/accueil.php';
        }
        ?>
    </main>

    <?php include "./components/footer.php" ?>

    <!-- include jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../src/js/jquery-2.1.4.min.js">\x3C/script>')
    </script>

    <!-- include the accessible-mega-menu plugin script -->
    <script src="./src/js/accessible-mega-menu.js"></script>
    <script src="./src/js/main.js"></script>
    <script src="./src/js/dyslexic.js"></script>

    <!-- initialize a selector as an accessible-mega-menu -->
    <script>
        $('nav:first').accessibleMegaMenu({
            // prefix for generated unique id attributes, which are required
            // to indicate aria-owns, aria-controls and aria-labelledby
            uuidPrefix: 'megamenu',

            // CSS class used to define the megamenu styling
            menuClass: 'nav-menu',

            // CSS class for a top-level navigation item in the megamenu
            topNavItemClass: 'nav-item',

            // CSS class for a megamenu panel
            panelClass: 'sub-nav',

            // CSS class for a group of items within a megamenu panel
            panelGroupClass: 'sub-nav-group',

            // CSS class for the hover state
            hoverClass: 'hover',

            // CSS class for the focus state
            focusClass: 'focus',

            // CSS class for the open state
            openClass: 'open'
        });
    </script>
</body>

</html>