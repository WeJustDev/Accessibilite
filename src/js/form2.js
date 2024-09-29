
// Masquer les messages d'erreur au chargement de la page
document.querySelectorAll('.text-red-600').forEach(function (errorMessage) {
    errorMessage.classList.add('hidden');
});

// Afficher/Cacher les messages d'erreur en fonction de la validation des champs
document.querySelector('form').addEventListener('submit', function (event) {
    const requiredFields = document.querySelectorAll('[required]');
    let valid = true;

    requiredFields.forEach(function (field) {
        const errorMessage = document.getElementById(`error-${field.id}`);
        if (!field.value) {
            valid = false;
            errorMessage.classList.remove('hidden');
        } else {
            errorMessage.classList.add('hidden');
        }
    });

    if (!valid) {
        event.preventDefault();  // Empêche la soumission du formulaire si un champ est vide
    }
});

// Écouter les changements sur les champs pour retirer les messages d'erreur
document.querySelectorAll('[required]').forEach(function (field) {
    field.addEventListener('input', function () {
        const errorMessage = document.getElementById(`error-${field.id}`);
        if (field.value) {
            errorMessage.classList.add('hidden');
        } else {
            errorMessage.classList.remove('hidden');
        }
    });
});