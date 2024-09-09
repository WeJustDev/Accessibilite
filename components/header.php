<style>
    /* Rudimentary CSS for demonstration */

    /* mega menu list */
    .nav-menu {
        display: block;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        z-index: 15;
    }

    /* a top level navigation item in the mega menu */
    .nav-item {
        display: inline-block;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /* first descendant link within a top level navigation item */
    .nav-item>a {
        border: 1px solid transparent;
        display: inline-block;
        margin: 0 0 -1px 0;
        padding: 0.5em 1em;
        position: relative;
    }

    /* focus/open states of first descendant link within a top level navigation item */
    .nav-item>a:focus,
    .nav-item>a.open {
        border: 1px solid #dedede;
    }

    /* open state of first descendant link within a top level 
     navigation item */
    .nav-item>a.open {
        background-color: #fff;
        border-bottom: none;
        z-index: 1;
    }

    /* sub-navigation panel */
    .sub-nav {
        background-color: #fff;
        border: 1px solid #dedede;
        display: none;
        margin-top: -1px;
        padding: 0.5em 1em;
        position: absolute;
        top: 2.2em;
    }

    /* sub-navigation panel open state */
    .sub-nav.open {
        display: block;
    }

    /* list of items within sub-navigation panel */
    .sub-nav ul {
        display: inline-block;
        margin: 0 1em 0 0;
        padding: 0;
        vertical-align: top;
    }

    /* list item within sub-navigation panel */
    .sub-nav li {
        display: block;
        line-height: 2;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
</style>
</head>

<body>
    <div role="navigation"
        class="relative bg-gray-600 w-full flex items-center focus-within:h-48 focus-within:md:h-16 h-0 px-3 overflow-hidden"
        aria-label="Accès rapide">
        <ul class="flex gap-5 flex-col md:flex-row md:items-center justify-center h-full w-full overflow-hidden px-2">
            <li>
                <a href="#search" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false">Barre de
                    recherche</a>
            </li>
            <li>
                <a href="#nav" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false">Menu de
                    navigation</a>
            </li>
            <li>
                <a href="#contenu" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false">Aller au
                    contenu</a>
            </li>
            <li>
                <a href="#footer" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false">Pied de
                    page</a>
            </li>
        </ul>
    </div>

    <nav id="nav" class="megamenu">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="?music">Music</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?music&amp;genre=0">Alternative</a></li>
                        <li><a href="?music&amp;genre=3">R&amp;B/Soul</a></li>
                        <li><a href="?music&amp;genre=6">Indie</a></li>
                    </ul>
                    <ul class="sub-nav-group">
                        <li><a href="?music&amp;genre=1">Dance</a></li>
                        <li><a href="?music&amp;genre=4">Electronic</a></li>
                        <li><a href="?music&amp;genre=7">Metal</a></li>
                    </ul>
                    <ul class="sub-nav-group">
                        <li><a href="?music&amp;genre=2">Hip-Hop/Rap</a></li>
                        <li><a href="?music&amp;genre=5">Jazz</a></li>
                        <li><a href="?music&amp;genre=8">Latino</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="?movies">Movies</a>
                <div class="sub-nav">
                    <ul class="sub-nav-group">
                        <li><a href="?movies&amp;genre=10">New Release</a></li>
                        <li><a href="?movies&amp;genre=13">Comedy</a></li>
                        <li><a href="?movies&amp;genre=16">Action</a></li>
                    </ul>
                    <ul class="sub-nav-group">
                        <li><a href="?movies&amp;genre=11">Drama</a></li>
                        <li><a href="?movies&amp;genre=14">Sci-Fi</a></li>
                        <li><a href="?movies&amp;genre=17">Adventure</a></li>
                    </ul>
                    <ul class="sub-nav-group">
                        <li><a href="?movies&amp;genre=12">Horror</a></li>
                        <li><a href="?movies&amp;genre=15">Documentary</a></li>
                        <li><a href="?movies&amp;genre=18">Fantasy</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>