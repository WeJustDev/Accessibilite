<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/main.css">
    <script src="dist/main.js" defer></script>
    <title>Formulaire d'ajout d'activité</title>
</head>

<body class="bg-gray-100">
    <main>
        <div class="p-5">
            <h1 class="text-2xl text-center mb-2">Formulaire d'ajout d'activité</h1>
            <p class="text-center mb-5">Remplissez le formulaire ci-dessous pour ajouter une activité à la liste.</p>
            <form class="max-w-2xl mx-auto bg-white shadow-sm pr-10 pl-10">
                <div class="mb-5">
                    <label for="nom-activite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nom de l'activité</label>
                    <input type="text" name="nom-activite" id="nom-activite"
                        class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Ex: Visite guidée du musée" required />
                </div>
                <div class="mb-5">
                    <label for="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Ville</label>
                    <input type="text" name="ville" id="ville"
                        class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Ex: Paris" required />
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description de l'activité</label>
                    <textarea name="description" id="description" rows="4"
                        class="max-h-64 shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Décrivez l'activité ici..." required></textarea>
                </div>
                <div class="flex justify-between gap-3 mb-5">
                    <div class="w-1/2">
                        <label for="duree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Durée de l'activité (heures)</label>
                        <input type="number" name="duree" id="duree" min="1" max="24"
                            class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Ex: 2" required />
                    </div>
                    <div class="w-1/2">
                        <label for="participants" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre de participants</label>
                        <input type="number" name="participants" id="participants" min="1"
                            class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Ex: 20" required />
                    </div>
                </div>
                <div class="mb-5">
                    <label for="date-activite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Date de l'activité</label>
                    <input type="date" name="date-activite" id="date-activite"
                        class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Prix de l'activité (en €)</label>
                    <input type="number" name="prix" id="prix" min="0" step="0.01"
                        class="shadow-sm border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Ex: 25.50" required />
                </div>
                <div class="mb-5">
                    <label for="terms" class="flex items-start">
                        <input id="terms" name="terms" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required />
                        <span class="ms-2 text-sm font-medium text-gray-900 dark:text-black">J'accepte les <a href="#"
                                class="text-blue-600 hover:underline dark:text-blue-500">conditions générales</a></span>
                    </label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter
                    l'activité</button>
            </form>
        </div>
    </main>
</body>

</html>
