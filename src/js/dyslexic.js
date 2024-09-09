document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dyslexic-mode-toggle');

    // Vérifiez si le mode dyslexique est déjà activé
    if (localStorage.getItem('dyslexicMode') === 'true') {
        document.body.classList.add('dyslexic-mode');
        toggle.checked = true;
    }

    // Fonction pour basculer le mode dyslexique
    function toggleDyslexicMode() {
        if (toggle.checked) {
            document.body.classList.add('dyslexic-mode');
            localStorage.setItem('dyslexicMode', 'true');
        } else {
            document.body.classList.remove('dyslexic-mode');
            localStorage.setItem('dyslexicMode', 'false');
        }
    }

    // Écouteur d'événements pour le changement de la case à cocher
    toggle.addEventListener('change', toggleDyslexicMode);

    // Écouteur d'événements pour les touches du clavier
    toggle.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault(); // Empêche le défilement de la page pour la touche espace
            toggle.checked = !toggle.checked;
            toggleDyslexicMode();
        }
    });
});