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
    .nav-item>a, .nav-item>button {
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
        gap: 1rem;
        margin-top: 37px;
        padding: 0.5em 1em;
        position: absolute;
        top: 2.2em;
    }

    /* sub-navigation panel open state */
    .sub-nav.open {
        display: flex;
    }

    /* list of items within sub-navigation panel */
    .sub-nav ul {
        display: inline-block;
        margin: 0 1em 0 0;
        padding: 0;
        vertical-align: top;
    }

    .sub-nav h2 {
        font-size: 1.125rem;
        font-weight: bold;
        color: #3B82F6;
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
                <a href="#search" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false" tabindex="1">Barre de
                    recherche</a>
            </li>
            <li>
                <a href="#nav" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false" tabindex="1">Menu de
                    navigation</a>
            </li>
            <li>
                <a href="#contenu" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false" tabindex="1">Aller au
                    contenu</a>
            </li>
            <li>
                <a href="#footer" class="p-2 bg-gray-50 rounded-full" type="button" aria-disabled="false" tabindex="1">Pied de
                    page</a>
            </li>
        </ul>
    </div>

    <div class="flex flex-col gap-3 absolute bg-yellow-400 p-6 right-0 top-1/3" >
        <div>
            <input type="checkbox" id="dyslexic-mode-toggle" aria-label="Activer le mode dyslexique" tabindex="3" class="cursor-pointer">
            <label for="dyslexic-mode-toggle" class="cursor-pointer">Mode dyslexique</label>
        </div>
    </div>

    <nav id="nav" class="megamenu" aria-label="Navigation principale">
        <ul class="nav-menu flex flex-row gap-3 items-center justify-center p-4">
            <li class="nav-item">
                <a href="/" aria-label="Page d'accueil" tabindex="2">Accueil</a>
            </li>
            <li class="nav-item">
                <button href="?page=logements" aria-expanded="false" aria-label="Types de logements" tabindex="2" aria-haspopup>Logements</button>
                <div class="sub-nav">
                    <div>
                        <h2 id="sub-nav-title">Hébergements conviviaux</h2>
                        <ul class="sub-nav-group" aria-labelledby="sub-nav-title">
                            <li><a href="?page=logements&type=auberges" tabindex="2.5">Auberges</a></li>
                            <li><a href="?page=logements&type=campings" tabindex="2.5">Campings</a></li>
                            <li><a href="?page=logements&type=hotes" tabindex="2.5">Maison d'hôtes</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 id="sub-nav-title2">Hébergement haut de gamme</h2>
                        <ul class="sub-nav-group" aria-labelledby="sub-nav-title2">
                            <li><a href="?page=logements&type=hotels" tabindex="2.5">Hôtels</a></li>
                            <li><a href="?page=logements&type=villas" tabindex="2.5">Villas</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <button href="?page=activitees" aria-expanded="false" aria-label="activités" tabindex="2" aria-haspopup>Activitées</button>
                <div class="sub-nav">
                    <div>
                        <h2 id="sub-nav-title3">Activitées aquatiques</h2>
                        <ul class="sub-nav-group" aria-labelledby="sub-nav-title3">
                            <li><a href="?page=activitees&type=surf" tabindex="2.5">Surf</a></li>
                            <li><a href="?page=activitees&type=wakeboard" tabindex="2.5">Wakeboard</a></li>
                            <li><a href="?page=activitees&type=plongeon" tabindex="2.5">Plongeon</a></li>
                            <li><a href="?page=activitees&type=plongee" tabindex="2.5">Plongée</a></li>
                            <li><a href="?page=activitees&type=kayak" tabindex="2.5">Kayak</a></li>
                            <li><a href="?page=activitees&type=paddle" tabindex="2.5">Paddle</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 id="sub-nav-title4">Activitées culturelles</h2>
                        <ul class="sub-nav-group" aria-labelledby="sub-nav-title4">
                            <li><a href="?page=activitees&type=musees" tabindex="2.5">Musées</a></li>
                            <li><a href="?page=activitees&type=festivals" tabindex="2.5">Festivals</a></li>
                            <li><a href="?page=activitees&type=expositions" tabindex="2.5">Expositions</a></li>
                            <li><a href="?page=activitees&type=spectacles" tabindex="2.5">Spectacles</a></li>
                            <li><a href="?page=activitees&type=litteraires" tabindex="2.5">Rencontres littéraires</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="?page=utilisateur" tabindex="2">Espace utilisateur</a>
            </li>
        </ul>
    </nav>