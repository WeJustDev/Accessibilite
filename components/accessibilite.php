<?php
$breadcrumbs = [
    ['text' => 'Accueil', 'link' => '?page=home'],
    ['text' => 'Page d\'accessibilité']
];

include 'components/ariane.php';
?>

<div class="container mx-auto">
    <h1 class="text-blue-500 text-3xl font-bold mb-4">Accessibilité</h1>
    <p>Nous nous engageons à rendre notre site accessible à tous. Voici quelques fonctionnalités que nous avons mises en place :</p>
    <ul class="list-disc ml-4 mt-2 mb-2">
        <li>Navigation au clavier : Vous pouvez naviguer sur notre site en utilisant uniquement le clavier.</li>
        <li>Descriptions alternatives : Toutes les images ont des descriptions alternatives pour les lecteurs d'écran.</li>
        <li>Contraste élevé : Nous utilisons des couleurs à contraste élevé pour améliorer la lisibilité.</li>
        <li>Textes redimensionnables : Vous pouvez agrandir les textes sans perte de qualité.</li>
        <li>Compatibilité avec les lecteurs d'écran : Notre site est compatible avec les principaux lecteurs d'écran.</li>
        <li>Notre site propose un affiche avec une police adaptée aux personnes dyslexiques</li>
        <li>Nos tableaux de <a href="?page=table">statistiques</a> proposent un <a href="?page=table_detail">lien de contournement</a></li>
    </ul>
    <p>Si vous avez des suggestions ou des problèmes d'accessibilité, veuillez nous contacter à <a href="mailto:accessibilite@example.com" class="text-blue-500 underline">accessibilite@example.com</a>.</p>
</div>