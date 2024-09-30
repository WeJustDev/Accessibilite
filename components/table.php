<head>
    <style>
        #tableNuitees {
            width: 80%;
        }

        #tableNuitees tr td:hover,
        #tableNuitees tr th:hover {
            background-color: grey;
        }

        #tableNuitees tr td:focus {
            background-color: green;
        }



        /* Optionnel : Style pour indiquer une ligne ou une cellule au focus */
        .focus-row {
            outline: 2px solid blue;
            /* ou toute autre couleur */
        }
    </style>
</head>

<title>Tableau de statistiques - Voyages en France</title>

<?php
$breadcrumbs = [
    ['text' => 'Accueil', 'link' => '?page=home'],
    ['text' => 'Statistiques']
];

include 'components/ariane.php';
?>

<div class="container mx-auto">

<h1>Les nuités en bretagne</h1>
<a href="?page=table_detail" aria-labelledby="explicationTableau" class="sr-only" id="detailTableau">Lien vers l'explication détaillée du tableau</a>
<p id="explicationTableau" class="sr-only">Ce lien mène à une explication détaillée des données du tableau.</p>

    <table aria-describedby="tableDescription" class="min-w-full table-auto border-collapse hidden lg:block" id="tableNuitees" tabindex="5">
        <caption class="text-lg font-semibold my-4 text-center">
            Nuitées de la saison d’été 2022 et évolution entre 2019 et 2022 par département de la bretagne selon le type d’hébergement
        </caption>
        <p id="tableDescription" class="sr-only">Ce tableau présente les nuitées de la saison d’été 2022 par département de la Bretagne : Côtes-d'Armor, Finistère, Ille-et-Vilaine et Morbihan selon les différents types d’hébergement (Hôtels, Camping, Autres hébergements collectifs). Il inclut également une comparaison avec les données de 2019.</p>

        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2" rowspan="2" scope="col" tabindex="5"></th>
                <th id="hotels" class="border px-4 py-2" colspan="2" scope="colgroup" tabindex="5">Hôtels - avril-septembre&nbsp;2022</th>
                <th id="camping" class="border px-4 py-2" colspan="2" scope="colgroup" tabindex="5">Camping - avril-septembre&nbsp;2022</th>
                <th id="autre" class="border px-4 py-2" colspan="2" scope="colgroup" tabindex="5">Autres hébergements collectifs de tourisme - avril-septembre&nbsp;2022</th>
                <th id="total" class="border px-4 py-2" colspan="2" scope="colgroup" tabindex="5">Total - avril-septembre&nbsp;2022</th>
            </tr>
            <tr>
                <th id="nuiteesHotels" class="border px-4 py-2" scope="col" tabindex="5">Nuitées totales (en&nbsp;milliers)</th>
                <th id="evolutionHotels" class="border px-4 py-2" scope="col" tabindex="5">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                <th id="nuiteesCamping" class="border px-4 py-2" scope="col" tabindex="5">Nuitées totales (en&nbsp;milliers)</th>
                <th id="evolutionCamping" class="border px-4 py-2" scope="col" tabindex="5">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                <th id="nuiteesAutre" class="border px-4 py-2" scope="col" tabindex="5">Nuitées totales (en&nbsp;milliers)</th>
                <th id="evolutionAutre" class="border px-4 py-2" scope="col" tabindex="5">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                <th id="nuiteesTotal" class="border px-4 py-2" scope="col" tabindex="5">Nuitées totales (en&nbsp;milliers)</th>
                <th id="evolutionTotal" class="border px-4 py-2" scope="col" tabindex="5">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
            </tr>
        </thead>

        <tbody>
            <tr class="bg-gray-100">
                <th id="bretagne" class="border px-4 py-2 font-bold text-left" scope="row" tabindex="5">Bretagne</th>
                <td headers="hotels nuiteesHotels bretagne" class="border px-4 py-2" tabindex="5">5&nbsp;173</td>
                <td headers="hotels evolutionHotels bretagne" class="border px-4 py-2" tabindex="5">-0,4</td>
                <td headers="camping nuiteesCamping bretagne" class="border px-4 py-2" tabindex="5">13&nbsp;641</td>
                <td headers="camping evolutionCamping bretagne" class="border px-4 py-2" tabindex="5">12,1</td>
                <td headers="autre nuiteesAutre bretagne" class="border px-4 py-2" tabindex="5">3&nbsp;040</td>
                <td headers="autre evolutionAutre bretagne" class="border px-4 py-2" tabindex="5">1,0</td>
                <td headers="total nuiteesTotal bretagne" class="border px-4 py-2" tabindex="5">21&nbsp;854</td>
                <td headers="total evolutionTotal bretagne" class="border px-4 py-2">7,2</td>
            </tr>
            <tr>
                <th id="cotesArmor" class="border px-4 py-2 text-left" scope="row" tabindex="5">Côtes-d’Armor</th>
                <td headers="hotels nuiteesHotels cotesArmor" class="border px-4 py-2" tabindex="5">828</td>
                <td headers="hotels evolutionHotels cotesArmor" class="border px-4 py-2" tabindex="5">4,4</td>
                <td headers="camping nuiteesCamping cotesArmor" class="border px-4 py-2" tabindex="5">2&nbsp;332</td>
                <td headers="camping evolutionCamping cotesArmor" class="border px-4 py-2" tabindex="5">14,1</td>
                <td headers="autre nuiteesAutre cotesArmor" class="border px-4 py-2" tabindex="5">388</td>
                <td headers="autre evolutionAutre cotesArmor" class="border px-4 py-2" tabindex="5">-8,5</td>
                <td headers="total nuiteesTotal cotesArmor" class="border px-4 py-2" tabindex="5">3&nbsp;548</td>
                <td headers="total evolutionTotal cotesArmor" class="border px-4 py-2" tabindex="5">8,8</td>
            </tr>
            <tr class="bg-gray-100">
                <th id="finistere" class="border px-4 py-2 text-left" scope="row" tabindex="5">Finistère</th>
                <td headers="hotels nuiteesHotels finistere" class="border px-4 py-2" tabindex="5">1&nbsp;225</td>
                <td headers="hotels evolutionHotels finistere" class="border px-4 py-2" tabindex="5">-4,7</td>
                <td headers="camping nuiteesCamping finistere" class="border px-4 py-2" tabindex="5">4&nbsp;892</td>
                <td headers="camping evolutionCamping finistere" class="border px-4 py-2" tabindex="5">10,4</td>
                <td headers="autre nuiteesAutre finistere" class="border px-4 py-2" tabindex="5">1&nbsp;108</td>
                <td headers="autre evolutionAutre finistere" class="border px-4 py-2" tabindex="5">2,8</td>
                <td headers="total nuiteesTotal finistere" class="border px-4 py-2" tabindex="5">7&nbsp;224</td>
                <td headers="total evolutionTotal finistere" class="border px-4 py-2" tabindex="5">6,3</td>
            </tr>
            <tr>
                <th id="illeEtVilaine" class="border px-4 py-2 text-left" scope="row" tabindex="5">Ille-et-Vilaine</th>
                <td headers="hotels nuiteesHotels illeEtVilaine" class="border px-4 py-2" tabindex="5">1&nbsp;857</td>
                <td headers="hotels evolutionHotels illeEtVilaine" class="border px-4 py-2" tabindex="5">-0,3</td>
                <td headers="camping nuiteesCamping illeEtVilaine" class="border px-4 py-2" tabindex="5">1&nbsp;367</td>
                <td headers="camping evolutionCamping illeEtVilaine" class="border px-4 py-2" tabindex="5">12,5</td>
                <td headers="autre nuiteesAutre illeEtVilaine" class="border px-4 py-2" tabindex="5">677</td>
                <td headers="autre evolutionAutre illeEtVilaine" class="border px-4 py-2" tabindex="5">5,9</td>
                <td headers="total nuiteesTotal illeEtVilaine" class="border px-4 py-2" tabindex="5">3&nbsp;901</td>
                <td headers="total evolutionTotal illeEtVilaine" class="border px-4 py-2" tabindex="5">5,0</td>
            </tr>
            <tr class="bg-gray-100">
                <th id="morbihan" class="border px-4 py-2 text-left" scope="row" tabindex="5">Morbihan</th>
                <td headers="hotels nuiteesHotels morbihan" class="border px-4 py-2" tabindex="5">1&nbsp;263</td>
                <td headers="hotels evolutionHotels morbihan" class="border px-4 py-2" tabindex="5">0,8</td>
                <td headers="camping nuiteesCamping morbihan" class="border px-4 py-2" tabindex="5">5&nbsp;050</td>
                <td headers="camping evolutionCamping morbihan" class="border px-4 py-2" tabindex="5">11,9</td>
                <td headers="autre nuiteesAutre morbihan" class="border px-4 py-2" tabindex="5">868</td>
                <td headers="autre evolutionAutre morbihan" class="border px-4 py-2" tabindex="5">7,2</td>
                <td headers="total nuiteesTotal morbihan" class="border px-4 py-2" tabindex="5">7&nbsp;181</td>
                <td headers="total evolutionTotal morbihan" class="border px-4 py-2" tabindex="5">8,5</td>
            </tr>
        </tbody>
    </table>

    <!-- tablette -->
    <div class="container mx-auto p-4  hidden md:block lg:hidden " id="tableMid">
        <table aria-describedby="tableDescriptionBretagne" class="min-w-full table-auto border-collapse" id="tableNuiteesBretagne">
            <caption class="text-lg font-semibold my-4 text-center">Nuitées de la saison d’été 2022 (Bretagne)</caption>
            <p id="tableDescriptionBretagne" class="sr-only">
                Ce tableau présente les nuitées de la saison d’été 2022 pour le département des Bretagne par différents types d’hébergement et inclut une comparaison avec les données de 2019.
            </p>
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2" scope="col">Type d’hébergement</th>
                    <th class="border px-4 py-2" scope="col">Nuitées totales (en&nbsp;milliers)</th>
                    <th class="border px-4 py-2" scope="col">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left" scope="row">Hôtels</th>
                    <td class="border px-4 py-2">5&nbsp;173</td>
                    <td class="border px-4 py-2">-0,4</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Camping</th>
                    <td class="border px-4 py-2">13&nbsp;641</td>
                    <td class="border px-4 py-2">12,1</td>
                </tr>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Autres hébergements collectifs</th>
                    <td class="border px-4 py-2">3&nbsp;040</td>
                    <td class="border px-4 py-2">1,0</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Total</th>
                    <td class="border px-4 py-2">12&nbsp;854</td>
                    <td class="border px-4 py-2">7,2</td>
                </tr>
            </tbody>
        </table>


        <table aria-describedby="tableDescriptionCotesArmor" class="min-w-full table-auto border-collapse" id="tableNuiteesCotesArmor">
            <caption class="text-lg font-semibold my-4 text-center">Nuitées de la saison d’été 2022 (Côtes-d'Armor)</caption>
            <p id="tableDescriptionCotesArmor" class="sr-only">
                Ce tableau présente les nuitées de la saison d’été 2022 pour le département des Côtes-d'Armor par différents types d’hébergement et inclut une comparaison avec les données de 2019.
            </p>
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2" scope="col">Type d’hébergement</th>
                    <th class="border px-4 py-2" scope="col">Nuitées totales (en&nbsp;milliers)</th>
                    <th class="border px-4 py-2" scope="col">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Hôtels</th>
                    <td class="border px-4 py-2">828</td>
                    <td class="border px-4 py-2">4,4</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Camping</th>
                    <td class="border px-4 py-2">2&nbsp;332</td>
                    <td class="border px-4 py-2">14,1</td>
                </tr>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Autres hébergements collectifs</th>
                    <td class="border px-4 py-2">388</td>
                    <td class="border px-4 py-2">-8,5</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Total</th>
                    <td class="border px-4 py-2">3&nbsp;548</td>
                    <td class="border px-4 py-2">8,8</td>
                </tr>
            </tbody>
        </table>

        <table aria-describedby="tableDescriptionFinistere" class="min-w-full table-auto border-collapse" id="tableNuiteesFinistere">
            <caption class="text-lg font-semibold my-4 text-center">Nuitées de la saison d’été 2022 (Finistère)</caption>
            <p id="tableDescriptionFinistere" class="sr-only">
                Ce tableau présente les nuitées de la saison d’été 2022 pour le département du Finistère par différents types d’hébergement et inclut une comparaison avec les données de 2019.
            </p>
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2" scope="col">Type d’hébergement</th>
                    <th class="border px-4 py-2" scope="col">Nuitées totales (en&nbsp;milliers)</th>
                    <th class="border px-4 py-2" scope="col">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Hôtels</th>
                    <td class="border px-4 py-2">1&nbsp;572</td>
                    <td class="border px-4 py-2">-2,8</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Camping</th>
                    <td class="border px-4 py-2">3&nbsp;356</td>
                    <td class="border px-4 py-2">9,8</td>
                </tr>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Autres hébergements collectifs</th>
                    <td class="border px-4 py-2">920</td>
                    <td class="border px-4 py-2">-1,6</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Total</th>
                    <td class="border px-4 py-2">5&nbsp;848</td>
                    <td class="border px-4 py-2">4,3</td>
                </tr>
            </tbody>
        </table>

        <table aria-describedby="tableDescriptionIlleVilaine" class="min-w-full table-auto border-collapse" id="tableNuiteesIlleVilaine">
            <caption class="text-lg font-semibold my-4 text-center">Nuitées de la saison d’été 2022 (Ille-et-Vilaine)</caption>
            <p id="tableDescriptionIlleVilaine" class="sr-only">
                Ce tableau présente les nuitées de la saison d’été 2022 pour le département de l'Ille-et-Vilaine par différents types d’hébergement et inclut une comparaison avec les données de 2019.
            </p>
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2" scope="col">Type d’hébergement</th>
                    <th class="border px-4 py-2" scope="col">Nuitées totales (en&nbsp;milliers)</th>
                    <th class="border px-4 py-2" scope="col">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Hôtels</th>
                    <td class="border px-4 py-2">1&nbsp;575</td>
                    <td class="border px-4 py-2">1,3</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Camping</th>
                    <td class="border px-4 py-2">2&nbsp;930</td>
                    <td class="border px-4 py-2">8,0</td>
                </tr>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Autres hébergements collectifs</th>
                    <td class="border px-4 py-2">536</td>
                    <td class="border px-4 py-2">13,0</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Total</th>
                    <td class="border px-4 py-2">5&nbsp;040</td>
                    <td class="border px-4 py-2">6,8</td>
                </tr>
            </tbody>
        </table>

        <table aria-describedby="tableDescriptionMorbihan" class="min-w-full table-auto border-collapse" id="tableNuiteesMorbihan">
            <caption class="text-lg font-semibold my-4 text-center">Nuitées de la saison d’été 2022 (Morbihan)</caption>
            <p id="tableDescriptionMorbihan" class="sr-only">
                Ce tableau présente les nuitées de la saison d’été 2022 pour le département du Morbihan par différents types d’hébergement et inclut une comparaison avec les données de 2019.
            </p>
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2" scope="col">Type d’hébergement</th>
                    <th class="border px-4 py-2" scope="col">Nuitées totales (en&nbsp;milliers)</th>
                    <th class="border px-4 py-2" scope="col">Évolution des nuitées 2022/2019 (en&nbsp;%)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Hôtels</th>
                    <td class="border px-4 py-2">1&nbsp;198</td>
                    <td class="border px-4 py-2">-3,5</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Camping</th>
                    <td class="border px-4 py-2">5&nbsp;023</td>
                    <td class="border px-4 py-2">14,2</td>
                </tr>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2 text-left">Autres hébergements collectifs</th>
                    <td class="border px-4 py-2">1&nbsp;196</td>
                    <td class="border px-4 py-2">-1,0</td>
                </tr>
                <tr>
                    <th class="border px-4 py-2 text-left">Total</th>
                    <td class="border px-4 py-2">7&nbsp;417</td>
                    <td class="border px-4 py-2">8,9</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- mobile -->
    <div class="mb-4 block md:hidden" id="tableSmall">
        <table class="min-w-full table-auto border-collapse" aria-describedby="desc-bretagne" role="table">
            <caption class="text-left font-bold mb-2">Bretagne</caption>
            <p id="desc-bretagne" class="sr-only">Ce tableau présente les nuitées totales et l'évolution des nuitées entre 2019 et 2022 pour la Bretagne, selon les différents types d'hébergements : Hôtels, Camping, Autres hébergements collectifs, ainsi que le total.</p>

            <thead>
                <tr role="row" class="bg-gray-100">
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Type d’hébergement</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Nuitées totales</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Évolution des nuitées (2019/2022)</th>
                </tr>
            </thead>

            <tbody>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Hôtels</td>
                    <td class="border px-4 py-2" tabindex="5">5&nbsp;173 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">-0,4%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Camping</td>
                    <td class="border px-4 py-2" tabindex="5">13&nbsp;641 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">12,1%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Autres hébergements collectifs</td>
                    <td class="border px-4 py-2" tabindex="5">3&nbsp;040 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">-1,5%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2 font-bold" tabindex="5">Total</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">21&nbsp;854 milliers</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">+5,6%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tableau Mobile Accessible - Côtes-d'Armor -->
        <table class="min-w-full table-auto border-collapse" aria-describedby="desc-cotes-d-armor" role="table">
            <caption class="text-left font-bold mb-2">Côtes-d'Armor</caption>
            <p id="desc-cotes-d-armor" class="sr-only">Ce tableau présente les nuitées totales et l'évolution des nuitées entre 2019 et 2022 pour les Côtes-d'Armor, selon les différents types d'hébergements : Hôtels, Camping, Autres hébergements collectifs, ainsi que le total.</p>

            <thead>
                <tr role="row" class="bg-gray-100">
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Type d’hébergement</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Nuitées totales</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Évolution des nuitées (2019/2022)</th>
                </tr>
            </thead>

            <tbody>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Hôtels</td>
                    <td class="border px-4 py-2" tabindex="5">3&nbsp;500 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+4,0%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Camping</td>
                    <td class="border px-4 py-2" tabindex="5">9&nbsp;800 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+3,8%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Autres hébergements collectifs</td>
                    <td class="border px-4 py-2" tabindex="5">2&nbsp;300 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+0,5%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2 font-bold" tabindex="5">Total</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">15&nbsp;600 milliers</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">+3,3%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tableau Mobile Accessible - Finistère -->
        <table class="min-w-full table-auto border-collapse" aria-describedby="desc-finistere" role="table">
            <caption class="text-left font-bold mb-2">Finistère</caption>
            <p id="desc-finistere" class="sr-only">Ce tableau présente les nuitées totales et l'évolution des nuitées entre 2019 et 2022 pour le Finistère, selon les différents types d'hébergements : Hôtels, Camping, Autres hébergements collectifs, ainsi que le total.</p>

            <thead>
                <tr role="row" class="bg-gray-100">
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Type d’hébergement</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Nuitées totales</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Évolution des nuitées (2019/2022)</th>
                </tr>
            </thead>

            <tbody>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Hôtels</td>
                    <td class="border px-4 py-2" tabindex="5">8&nbsp;250 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+5,1%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Camping</td>
                    <td class="border px-4 py-2" tabindex="5">20&nbsp;000 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+9,0%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Autres hébergements collectifs</td>
                    <td class="border px-4 py-2" tabindex="5">5&nbsp;500 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+2,0%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2 font-bold" tabindex="5">Total</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">33&nbsp;750 milliers</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">+5,8%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tableau Mobile Accessible - Ille-et-Vilaine -->
        <table class="min-w-full table-auto border-collapse" aria-describedby="desc-ille-et-vilaine" role="table">
            <caption class="text-left font-bold mb-2">Ille-et-Vilaine</caption>
            <p id="desc-ille-et-vilaine" class="sr-only">Ce tableau présente les nuitées totales et l'évolution des nuitées entre 2019 et 2022 pour l'Ille-et-Vilaine, selon les différents types d'hébergements : Hôtels, Camping, Autres hébergements collectifs, ainsi que le total.</p>

            <thead>
                <tr role="row" class="bg-gray-100">
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Type d’hébergement</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Nuitées totales</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Évolution des nuitées (2019/2022)</th>
                </tr>
            </thead>

            <tbody>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Hôtels</td>
                    <td class="border px-4 py-2" tabindex="5">4&nbsp;250 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+2,5%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Camping</td>
                    <td class="border px-4 py-2" tabindex="5">10&nbsp;200 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+8,1%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Autres hébergements collectifs</td>
                    <td class="border px-4 py-2" tabindex="5">2&nbsp;500 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">-1,0%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2 font-bold" tabindex="5">Total</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">16&nbsp;950 milliers</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">+4,5%</td>
                </tr>
            </tbody>
        </table>

        <!-- Tableau Mobile Accessible - Morbihan -->
        <table class="min-w-full table-auto border-collapse" aria-describedby="desc-morbihan" role="table">
            <caption class="text-left font-bold mb-2">Morbihan</caption>
            <p id="desc-morbihan" class="sr-only">Ce tableau présente les nuitées totales et l'évolution des nuitées entre 2019 et 2022 pour le Morbihan, selon les différents types d'hébergements : Hôtels, Camping, Autres hébergements collectifs, ainsi que le total.</p>

            <thead>
                <tr role="row" class="bg-gray-100">
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Type d’hébergement</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Nuitées totales</th>
                    <th scope="col" class="border px-4 py-2 text-left" tabindex="5">Évolution des nuitées (2019/2022)</th>
                </tr>
            </thead>

            <tbody>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Hôtels</td>
                    <td class="border px-4 py-2" tabindex="5">6&nbsp;100 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+3,0%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Camping</td>
                    <td class="border px-4 py-2" tabindex="5">15&nbsp;500 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+6,5%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2" tabindex="5">Autres hébergements collectifs</td>
                    <td class="border px-4 py-2" tabindex="5">4&nbsp;000 milliers</td>
                    <td class="border px-4 py-2" tabindex="5">+1,2%</td>
                </tr>
                <tr role="row">
                    <td scope="row" class="border px-4 py-2 font-bold" tabindex="5">Total</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">25&nbsp;600 milliers</td>
                    <td class="border px-4 py-2 font-bold" tabindex="5">+5,5%</td>
                </tr>
            </tbody>
        </table>


    </div>

    <!-- Lien vers explication détaillée -->
    
</div>