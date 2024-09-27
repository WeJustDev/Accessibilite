<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/accueil.css">
    <title>Voyage En France</title>
</head>

<body class="bg-white text-gray-800 font-sans leading-relaxed">
    <!-- Header -->
    <header class="bg-blue-500 text-white py-8" role="banner">
        <div class="container mx-auto text-center px-4 md:px-0">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 fade-in">Voyage En France</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto fade-in">Découvrez les meilleures activités et bons plans pour voyager en France, partagés par notre communauté d'explorateurs.</p>
            <a href="#" class="mt-6 inline-block bg-yellow-400 text-black font-semibold py-3 px-6 md:px-8 rounded-full shadow-lg hover:bg-yellow-300 transition-all fade-in" aria-label="Explorer les activités">Explorez Maintenant</a>
        </div>
    </header>

    <!-- Main content -->
    <main role="main">
        <!-- Section Actualités -->
        <section id="actualites" class="py-16 section-bg" aria-labelledby="titre-actualites" role="region">
            <div class="container mx-auto text-center px-4 md:px-0">
                <h2 id="titre-actualites" class="text-2xl md:text-3xl font-bold mb-8 slide-in">Dernières Actualités</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article class="bg-white shadow-lg rounded-lg p-6 hover-shift" role="article" aria-labelledby="titre-activite1">
                        <img src="../src/images/activite1.jpg" alt="Plage secrète bordée d'eau turquoise sur la côte Atlantique" class="rounded-t-lg w-full h-48 object-cover mb-4">
                        <h3 id="titre-activite1" class="text-xl md:text-2xl font-semibold">Découverte des plages secrètes</h3>
                        <p class="mt-2">Explorez les joyaux cachés de la côte Atlantique. Idéal pour les amateurs de tranquillité.</p>
                    </article>
                    <article class="bg-white shadow-lg rounded-lg p-6 hover-shift" role="article" aria-labelledby="titre-activite2">
                        <img src="../src/images/activite2.jpg" alt="Champs de lavande en Provence sous un ciel bleu" class="rounded-t-lg w-full h-48 object-cover mb-4">
                        <h3 id="titre-activite2" class="text-xl md:text-2xl font-semibold">Randonnée en Provence</h3>
                        <p class="mt-2">Une balade au cœur des champs de lavande, avec des vues imprenables sur le paysage provençal.</p>
                    </article>
                    <article class="bg-white shadow-lg rounded-lg p-6 hover-shift" role="article" aria-labelledby="titre-activite3">
                        <img src="../src/images/activite3.jpg" alt="Château de la Loire avec une rivière et un ciel ensoleillé" class="rounded-t-lg w-full h-48 object-cover mb-4">
                        <h3 id="titre-activite3" class="text-xl md:text-2xl font-semibold">Visite des châteaux de la Loire</h3>
                        <p class="mt-2">Plongez dans l'histoire en visitant les magnifiques châteaux au bord de la Loire.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section Partagez vos Activités -->
        <section id="activites" class="py-16 bg-gray-100" aria-labelledby="titre-activites" role="region">
            <div class="container mx-auto text-center px-4 md:px-0">
                <h2 id="titre-activites" class="text-2xl md:text-3xl font-bold mb-8 fade-in">Partagez Vos Activités</h2>
                <p class="text-base md:text-lg mb-8 max-w-2xl mx-auto fade-in">Que vous soyez un passionné de culture, un amoureux de la nature ou un gourmet, partagez vos expériences pour inspirer d'autres voyageurs.</p>
                <a href="#" class="inline-block bg-green-500 text-white font-semibold py-3 px-6 md:px-8 rounded-full shadow-lg hover:bg-green-400 transition-all fade-in" aria-label="Poster une activité">Poster une activité</a>
            </div>
        </section>

        <!-- Section Inscription/Connexion -->
        <section id="auth" class="py-16 section-bg" aria-labelledby="titre-auth" role="region">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4 md:px-0">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center fade-in" role="form" aria-labelledby="titre-creer-compte">
                    <h2 id="titre-creer-compte" class="text-2xl md:text-3xl font-bold mb-4">Créez un Compte</h2>
                    <p class="mb-6">Rejoignez notre communauté pour partager vos aventures et découvrir des lieux uniques.</p>
                    <a href="#" class="bg-blue-500 text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-blue-400 transition-all" aria-label="Créer un compte">S'inscrire</a>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center fade-in" role="form" aria-labelledby="titre-connexion">
                    <h2 id="titre-connexion" class="text-2xl md:text-3xl font-bold mb-4">Déjà Membre ?</h2>
                    <p class="mb-6">Connectez-vous pour accéder à votre profil et consulter vos activités enregistrées.</p>
                    <a href="#" class="bg-gray-500 text-white font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-gray-400 transition-all" aria-label="Se connecter">Se connecter</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-8" role="contentinfo">
        <div class="container mx-auto text-center px-4 md:px-0">
            <p>&copy; 2024 Voyage En France. Tous droits réservés.</p>
            <p>Créé avec passion pour les voyageurs.</p>
        </div>
    </footer>
</body>

</html>
