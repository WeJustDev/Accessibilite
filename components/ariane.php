<?php
if (isset($breadcrumbs) && is_array($breadcrumbs)) {
    echo '<nav class="container mx-auto mt-5 mb-2" aria-label="breadcrumb">';
    echo '<ol class="breadcrumb flex flex-row gap-2">';
    $totalBreadcrumbs = count($breadcrumbs);
    foreach ($breadcrumbs as $index => $breadcrumb) {
        echo '<li class="breadcrumb-item">';
        if (is_array($breadcrumb) && isset($breadcrumb['text'])) {
            if (isset($breadcrumb['link'])) {
                echo '<a href="' . htmlspecialchars($breadcrumb['link']) . '">' . htmlspecialchars($breadcrumb['text']) . '</a>';
            } else {
                echo htmlspecialchars($breadcrumb['text']);
            }
        } else {
            echo htmlspecialchars($breadcrumb);
        }
        if ($index < $totalBreadcrumbs - 1) {
            echo ' / ';
        }
        echo '</li>';
    }
    echo '</ol>';
    echo '</nav>';
}
?>