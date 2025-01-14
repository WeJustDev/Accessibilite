<script src="../src/js/form2.js" defer></script>
<title>Ajout d'activité - Voyage En France</title>

<?php
$breadcrumbs = [
    ['text' => 'Accueil', 'link' => '?page=home'],
    ['text' => 'Ajout d\'activité']
];

include 'components/ariane.php';
?>

<div class="container mx-auto">
    <h1 class="text-2xl text-center mb-2">Formulaire d'ajout d'activité</h1>
    <p class="text-center mb-5">Remplissez le formulaire ci-dessous pour ajouter une activité à la liste.</p>
    <form class="max-w-2xl mx-auto bg-white shadow-sm p-10" novalidate>
        <div class="mb-5">
            <label for="nom-activite" class="block mb-2 text-sm font-medium text-gray-900">Nom de l'activité <span aria-hidden="true">*</span></label>
            <input type="text" name="nom-activite" id="nom-activite" required aria-required="true" aria-describedby="error-nom-activite"
                class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                placeholder="Ex: Visite guidée du musée" />
            <span id="error-nom-activite" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Nom de l'activité' est obligatoire.</span>
        </div>
        <div class="mb-5">
            <label for="ville" class="block mb-2 text-sm font-medium text-gray-900">Ville <span aria-hidden="true">*</span></label>
            <input type="text" name="ville" id="ville" required aria-required="true" aria-describedby="error-ville"
                class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                placeholder="Ex: Paris" />
            <span id="error-ville" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Ville' est obligatoire.</span>
        </div>
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description de l'activité <span aria-hidden="true">*</span></label>
            <textarea name="description" id="description" rows="4" required aria-required="true" aria-describedby="error-description"
                class="max-h-64 shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                placeholder="Décrivez l'activité ici..."></textarea>
            <span id="error-description" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Description de l'activité' est obligatoire.</span>
        </div>
        <div class="flex justify-between gap-3 mb-5">
            <div class="w-1/2">
                <label for="duree" class="block mb-2 text-sm font-medium text-gray-900">Durée de l'activité (heures) <span aria-hidden="true">*</span></label>
                <input type="number" name="duree" id="duree" min="1" max="24" required aria-required="true" aria-describedby="error-duree"
                    class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                    placeholder="Ex: 2" />
                <span id="error-duree" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Durée de l'activité' est obligatoire.</span>
            </div>
            <div class="w-1/2">
                <label for="participants" class="block mb-2 text-sm font-medium text-gray-900">Nombre de participants <span aria-hidden="true">*</span></label>
                <input type="number" name="participants" id="participants" min="1" required aria-required="true" aria-describedby="error-participants"
                    class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                    placeholder="Ex: 20" />
                <span id="error-participants" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Nombre de participants' est obligatoire.</span>
            </div>
        </div>
        <div class="mb-5">
            <label for="date-activite" class="block mb-2 text-sm font-medium text-gray-900">Date de l'activité <span aria-hidden="true">*</span></label>
            <input type="date" name="date-activite" id="date-activite" required aria-required="true" aria-describedby="error-date-activite"
                class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600" />
            <span id="error-date-activite" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Date de l'activité' est obligatoire.</span>
        </div>
        <div class="mb-5">
            <label for="prix" class="block mb-2 text-sm font-medium text-gray-900">Prix de l'activité (en €) <span aria-hidden="true">*</span></label>
            <input type="number" name="prix" id="prix" min="0" step="0.01" required aria-required="true" aria-describedby="error-prix"
                class="shadow-sm border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-600 block w-full p-2.5 bg-gray-50 placeholder-gray-600"
                placeholder="Ex: 25.50" />
            <span id="error-prix" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Le champ 'Prix de l'activité' est obligatoire.</span>
        </div>
        <div class="mb-5">
            <label for="terms" class="flex items-start">
                <input id="terms" name="terms" type="checkbox" required aria-required="true" aria-describedby="error-terms"
                    class="w-4 h-4 border border-gray-600 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" />
                <span class="ms-2 text-sm font-medium text-gray-900">J'accepte les <a href="#" class="text-blue-600 hover:underline">conditions générales</a></span>
            </label>
            <span id="error-terms" class="text-red-600 text-sm hidden" aria-live="assertive" role="alert">Vous devez accepter les conditions générales.</span>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            aria-label="Ajouter l'activité">Ajouter l'activité</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const fields = form.querySelectorAll('[required]');

    fields.forEach(field => {
        field.addEventListener('blur', function () {
            validateField(field);
        });
    });

    function validateField(field) {
        const errorSpan = document.getElementById(`error-${field.id}`);
        if (!field.checkValidity()) {
            errorSpan.classList.remove('hidden');
        } else {
            errorSpan.classList.add('hidden');
        }
    }
});
</script>