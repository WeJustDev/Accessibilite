<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/main.css">
    <script src="../dist/main.js" defer></script>
    <title>Voyage En France</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <header class="bg-gray-200 pt-5" aria-label="Bannière principale">
        <div class="mx-auto w-full h-52 p-5 flex flex-col justify-center items-start">
            <h1 class="text-4xl font-bold text-left">Voyage En France</h1>
            <p class="w-3/5 pt-7 pb-7 text-md font-bold text-black-500">
                Le site Voyage En France vise à rassembler les meilleurs bons plans et activités à faire dans les
                villes françaises. Les utilisateurs peuvent partager leurs expériences et aider d'autres à profiter
                au maximum de leur voyage.
            </p>
            <button class="rounded-full bg-slate-50 p-3 pl-5 pr-5 text-black">En profiter</button>
        </div>
    </header>
    <main class="max-w-6xl mx-auto my-8 p-4">
        <section id="actualités" class="mb-20">
            <h2 class="text-2xl font-semibold mb-4">Nos Actualités</h2>
            <p>Les dernières activités postées</p>
        </section>
        
        <section id="activités" class="mb-20">
            <div class="flex justify-center items-center gap-6">
                <div class="w-96 h-1/2 overflow-hidden rounded-xl">
                    <img src="activite1.jpg" alt="" class="">
                </div>
                <div class="text-center mx-auto p-5 h-64 w-1/3 bg-gray-200 flex flex-col items-center justify-center rounded-2xl">
                    <h2 class="text-2xl font-semibold mb-4">Vous aussi commencez à poster des activités !</h2>
                    <p>Partagez vos expériences, vos émotions et vos vacances.</p>
                    <button class="rounded-full bg-yellow-500 p-3 pl-5 pr-5 mt-4">Poster une activité</button>
                </div>
                <div class="w-96 h-1/2 overflow-hidden rounded-xl">
                    <img src="activite2.jpg" alt="" class="">
                </div>
            </div>

        </section>
        
        <section id="connexion" class="max-w-4xl mx-auto mb-20 flex items-center justify-center text-center">
            <div class="w-full bg-slate-100">
                <h2 class="text-2xl font-semibold mb-4">Créez vous un compte</h2>
                <p class="text-left">Inscrivez-vous pour partager vos expériences et découvrir les bons plans des autres voyageurs.</p>
                <button class="rounded-full bg-blue-500 p-3 pl-5 pr-5 text-white mt-4">Créer un compte</button>
            </div>
            <div class="w-full">
                <h2 class="text-2xl font-semibold mb-4">Déjà membre ?</h2>
                <p class="text-left">Connectez-vous pour partager vos expériences et découvrir les bons plans des autres voyageurs.</p>
                <button class="rounded-full bg-slate-300 p-3 pl-5 pr-5 text-black mt-4">Se connecter</button>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white p-4">
        <p>&copy; 2024 Voyage En France. Tous droits réservés.</p>
    </footer>
</body>

</html>
