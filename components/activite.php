<title>Activité exemple - Voyager en France</title>

<!-- Header -->
<header class="bg-blue-700 text-white">
<div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold" tabindex="0" aria-label="Titre de la page : Détail de l'activité">Détail de l'activité</h1>
    <nav>
        <a href="#" class="text-white hover:underline" aria-label="Retour à la page d'accueil">Accueil</a>
    </nav>
</div>
</header>

<?php
$breadcrumbs = [
    ['text' => 'Activités', 'link' => '?page=activitees#ancre'],
    ['text' => 'Activités Aquatiques', 'link' => '?page=activitees'],
    ['text' => 'Activité exemple']
];

include 'components/ariane.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 py-8 max-w-4xl" role="main">
<!-- Image principale -->
<div class="rounded-lg overflow-hidden shadow-lg mb-6">
    <img src="./src/img/paris.webp" alt="" class="w-full h-64 object-cover" aria-describedby="image-description">
</div>
<figcaption id="image-description" class="sr-only">Image montrant la Tour Eiffel et une vue de Paris.</figcaption>

<!-- Titre et Description -->
<section aria-labelledby="activity-title">
    <h2 id="activity-title" class="text-3xl font-bold mb-4" tabindex="0" aria-label="Titre de l'activité : Découvrez Paris">Découvrez Paris</h2>
    <p class="text-lg mb-6" tabindex="0">Explorez les merveilles de Paris, la ville des lumières, avec ses monuments iconiques et son ambiance unique. Que vous soyez amateur d'histoire, de culture ou de gastronomie, Paris a tout à offrir.</p>

    <!-- Informations pratiques -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6" aria-labelledby="practical-info">
        <h3 id="practical-info" class="text-2xl font-semibold mb-4" tabindex="0" aria-label="Informations pratiques">Informations pratiques</h3>
        <ul class="space-y-2 text-lg" tabindex="0" aria-label="Liste des informations pratiques">
            <li><strong>Prix :</strong> 50 € par personne</li>
            <li><strong>Langues disponibles :</strong> Français, Anglais, Espagnol</li>
            <li><strong>Durée :</strong> 3 heures</li>
            <li><strong>Horaires :</strong> 10h00 - 13h00, tous les jours</li>
            <li><strong>Accessibilité :</strong> Accessible aux personnes à mobilité réduite</li>
        </ul>
    </div>

    <!-- Call to Action Buttons -->
    <div class="flex flex-wrap gap-4 mb-6">
        <a href="#" class="inline-block bg-blue-700 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-label="Réserver maintenant pour découvrir Paris">Réserver maintenant</a>
        <a href="#" class="inline-block bg-gray-200 text-gray-800 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400" aria-label="Ajouter cette activité aux favoris">Ajouter aux favoris</a>
    </div>
</section>

<!-- Section Détails -->
<section aria-labelledby="activity-details">
    <h3 id="activity-details" class="text-2xl font-semibold mb-4" tabindex="0" aria-label="Détails de l'activité">Détails de l'activité</h3>
    <p class="mb-4" tabindex="0">Pendant cette visite guidée, vous découvrirez les monuments incontournables de Paris, tels que la Tour Eiffel, le Louvre, et la Cathédrale Notre-Dame. Nos guides expérimentés vous emmèneront dans les coins cachés de la ville tout en vous partageant des anecdotes et des faits historiques passionnants.</p>
    <p tabindex="0">La visite se termine par une croisière sur la Seine, offrant une vue imprenable sur les ponts et les bâtiments emblématiques de la capitale française.</p>
</section>
