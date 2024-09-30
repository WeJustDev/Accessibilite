<style>
    .plan a {
        text-decoration: underline;
    }
</style>

<title>Plan du site - Voyages en France</title>

<?php
$breadcrumbs = [
    ['text' => 'Accueil', 'link' => '?page=home'],
    ['text' => 'Plan du site']
];

include 'components/ariane.php';
?>


<div role="navigation" aria-label="Plan du site" class="plan container mx-auto">
    <h1 class="text-2xl text-gray-900 mb-6">Plan du site</h1>
    <ul role="list" aria-labelledby="activites">
        <h2 id="activites" class="text-2xl font-bold text-blue-500">Activitées</h2>
        <li role="listitem" class="ml-4 md:ml-10">
            <a href="?page=activitees" class="h2 text-xl font-bold text-blue-500" id="sub-nav-title89">Activités aquatiques</a>
            <ul aria-labelledby="sub-nav-title89" role="list" class="ml-4 md:ml-10">
                <li role="listitem"><a href="?page=activitees&type=kayak">Kayak</a></li>
                <li role="listitem"><a href="?page=activitees&type=paddle">Paddle</a></li>
                <li role="listitem"><a href="?page=activitees&type=voile">Voile</a></li>
                <li role="listitem"><a href="?page=activitees&type=aquagym">Aqua-gym</a></li>
            </ul>
        </li>
        <li role="listitem" class="ml-4 md:ml-10">
            <a href="?page=activitees" class="h2 text-xl font-bold text-blue-500" id="sub-nav-title90">Activités culturelles</a>
            <ul aria-labelledby="sub-nav-title90" role="list" class="ml-4 md:ml-10">
                <li role="listitem"><a href="?page=activitees&type=kayak">Musées</a></li>
                <li role="listitem"><a href="?page=activitees&type=paddle">Festivals</a></li>
                <li role="listitem"><a href="?page=activitees&type=voile">Expositions</a></li>
                <li role="listitem"><a href="?page=activitees&type=aquagym">Spectacles</a></li>
                <li role="listitem"><a href="?page=activitees&type=aquagym">Rencontres littéraires</a></li>
            </ul>
        </li>
    </ul>
    <ul>
        <h2 id="logements" class="text-2xl font-bold text-blue-500">Logements</h2>
        <li role="listitem" class="ml-4 md:ml-10">
            <a href="?page=activitees" class="h2 text-xl font-bold text-blue-500" id="sub-nav-title99">Hébergements conviviaux</a>
            <ul aria-labelledby="sub-nav-title99" role="list" class="ml-4 md:ml-10">
                <li role="listitem"><a href="?page=activitees&type=musees">Auberges</a></li>
                <li role="listitem"><a href="?page=activitees&type=festivals">Campings</a></li>
                <li role="listitem"><a href="?page=activitees&type=expositions">Maisons d'hôtes</a></li>
            </ul>
        </li>
        <li role="listitem" class="ml-4 md:ml-10">
            <a href="?page=activitees" class="h2 text-xl font-bold text-blue-500" id="sub-nav-title98">Hébergements haut de gamme</a>
            <ul aria-labelledby="sub-nav-title98" role="list" class="ml-4 md:ml-10">
                <li role="listitem" ><a href="?page=activitees&type=musees">Hôtels</a></li>
                <li role="listitem" ><a href="?page=activitees&type=festivals">Villas</a></li>
            </ul>
        </li>
    </ul>
    <div>
        <h2 id="obligations" class="text-2xl font-bold text-blue-500">Obligations légales</h2>
        <ul role="list" class="ml-4 md:ml-10">
            <li role="listitem"><a href="#">Accessibilité : partiellement conforme</a></li>
            <li role="listitem"><a href="#">Mentions légales</a></li>
            <li role="listitem"><a href="#">Données personnelles</a></li>
            <li role="listitem"><a href="#">Gestion des cookies</a></li>
        </ul>
    </div>
</div>