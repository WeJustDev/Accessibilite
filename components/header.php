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
    <div>
        <input type="checkbox" id="dyslexic-mode-toggle" aria-label="Activer le mode dyslexique">
        <label for="dyslexic-mode-toggle">Mode dyslexique</label>
    </div>

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

    <nav id="nav" class="megamenu" aria-label="Navigation principale">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/" aria-label="Page d'accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <button href="?page=logements" aria-expanded="false" aria-label="Types de logements" aria-haspopup>Logements</button>
                <div class="sub-nav">
                    <h2 id="sub-nav-title">Hébergements conviviaux</h2>
                    <ul class="sub-nav-group" aria-labelledby="sub-nav-title">
                        <li><a href="?page=logements&type=auberges">Auberges</a></li>
                        <li><a href="?page=logements&type=campings">Campings</a></li>
                        <li><a href="?page=logements&type=hotes">Maison d'hôtes</a></li>
                    </ul>
                    <h2 id="sub-nav-title2">Hébergement haut de gamme</h2>
                    <ul class="sub-nav-group" aria-labelledby="sub-nav-title2">
                        <li><a href="?page=logements&type=hotels">Hôtels</a></li>
                        <li><a href="?page=logements&type=villas">Villas</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <button href="?page=activitees" aria-expanded="false" aria-label="activités" aria-haspopup>Activitées</button>
                <div class="sub-nav">
                    <h2 id="sub-nav-title3">Activitées aquatiques</h2>
                    <ul class="sub-nav-group" aria-labelledby="sub-nav-title3">
                        <li><a href="?page=activitees&type=surf">Surf</a></li>
                        <li><a href="?page=activitees&type=wakeboard">Wakeboard</a></li>
                        <li><a href="?page=activitees&type=plongeon">Plongeon</a></li>
                        <li><a href="?page=activitees&type=plongee">Plongée</a></li>
                        <li><a href="?page=activitees&type=kayak">Kayak</a></li>
                        <li><a href="?page=activitees&type=paddle">Paddle</a></li>
                        <li><a href="?page=activitees&type=voile">Voile</a></li>
                        <li><a href="?page=activitees&type=aquagym">Aqua-gym</a></li>
                    </ul>
                    <h2 id="sub-nav-title4">Activitées culturelles</h2>
                    <ul class="sub-nav-group" aria-labelledby="sub-nav-title4">
                        <li><a href="?page=activitees&type=musees">Musées</a></li>
                        <li><a href="?page=activitees&type=festivals">Festivals</a></li>
                        <li><a href="?page=activitees&type=expositions">Expositions</a></li>
                        <li><a href="?page=activitees&type=spectacles">Spectacles</a></li>
                        <li><a href="?page=activitees&type=litteraires">Rencontres littéraires</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="?page=utilisateur">Espace utilisateur</a>
            </li>
        </ul>
    </nav>