<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>

<body class="bg-gray-100">
    <div class="mx-auto max-w-6xl">
        <!-- Titre de la page -->
        <h1 class="text-3xl font-extrabold my-4 mb-12">Activités à faire en France</h1>

        <!-- Description du contenu -->
        <h2 class="text-sm font-bold text-gray-500 mb-4" aria-label="Nombre d'activités disponibles">Activités que l'on
            propose <span class="text-sm font-bold text-gray-700" aria-label="8 activités disponibles">(8)</span> :</h2>

        <!-- Section Filtre et Tri -->
        <div class="flex flex-col md:flex-row md:justify-between items-center mb-5 space-y-4 md:space-y-0">

            <!-- Filtrage -->
            <div class="flex flex-wrap justify-center md:justify-start space-x-3" role="group"
                aria-label="Options de filtrage">
                <!-- Filtre par Prix -->
                <div>
                    <button id="filter-price" aria-label="Filtrer par prix"
                        class="border px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Prix</button>
                </div>
                <!-- Filtre par Langues -->
                <div>
                    <button id="filter-language" aria-label="Filtrer par langues"
                        class="border px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Langues</button>
                </div>
                <!-- Filtre par Durée -->
                <div>
                    <button id="filter-duration" aria-label="Filtrer par durée"
                        class="border px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Durée</button>
                </div>
                <!-- Filtre par Horaire -->
                <div>
                    <button id="filter-schedule" aria-label="Filtrer par horaire"
                        class="border px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Horaire</button>
                </div>
            </div>

            <!-- Bouton pour plus de filtres -->
            <div class="flex justify-center md:justify-end">
                <button id="more-filters" aria-label="Afficher plus de filtres"
                    class="flex items-center border px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 012 0v12m0 0a1 1 0 001 1h8a1 1 0 001-1V4a1 1 0 012 0v12a1 1 0 001 1h2a1 1 0 001-1V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1z">
                        </path>
                    </svg>
                    Filtres
                </button>
            </div>

            <!-- Trier par -->
            <div class="flex items-center space-x-2 justify-center md:justify-end">
                <label for="sort" class="text-gray-700" aria-label="Option de tri">Trier par :</label>
                <select id="sort"
                    class="border px-4 py-2 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                    aria-label="Choisir une option de tri">
                    <option value="conseillé">Conseillé</option>
                    <option value="prix">Prix</option>
                    <option value="durée">Durée</option>
                </select>
            </div>
        </div>

    </div>

    <div class="container mx-auto  max-w-6xl my-8 px-4">
        <!-- Grille pour les cartes -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Carte 1 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/paris.webp" alt="Visiter Paris" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Découvrez Paris</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Explorez les merveilles de Paris, la ville des lumières
                        avec ses monuments iconiques et son ambiance unique.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/chambord.webp" alt="Château de Chambord" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Visitez le Château de Chambord
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Un chef-d'œuvre de la Renaissance française, explorez ce
                        château historique et ses magnifiques jardins.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/grasse.webp" alt="Visitez Grasse" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Capitale mondiale du parfum -
                            Grasse</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Parcourez les ruelles de Grasse, découvrez son patrimoine
                        et sa longue tradition dans l’art du parfum.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/camargue.webp" alt="Explorez la Camargue" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Nature et tradition en Camargue
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Profitez de la richesse naturelle et culturelle de la
                        Camargue, entre marais, flamants roses et chevaux sauvages.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 1 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/viaferata.jpg" alt="Via Ferrata en France" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Aventure en Via Ferrata</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Partez à l'aventure sur une Via Ferrata en France, où
                        escalade et randonnée se rencontrent pour des sensations fortes et des paysages à couper le
                        souffle.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/vtt.jpg" alt="Randonnée VTT en France" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Randonnée VTT en Pleine Nature
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Explorez les sentiers de montagne et de forêt en VTT, pour
                        une aventure sportive et naturelle à travers les plus beaux paysages de France.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="max-w-sm bg-white border border-gray-400 rounded-md shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="./src/img/snowboard.jpg" alt="Snowboard en France" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Snowboard dans les Alpes
                            Françaises</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Dévalez les pistes enneigées des Alpes en snowboard et
                        profitez d'un cadre exceptionnel pour des descentes inoubliables et des sensations fortes.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        En savoir plus
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>


        </div>
    </div>
    </div>
</body>

</html>